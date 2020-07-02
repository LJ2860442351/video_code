<?php
namespace app\admins\controller;
use app\admins\controller\BaseAdmin;

/**
 *视频管理
 */
class Video extends BaseAdmin
{
	public function index()
	{
		//分页大小
		$data['pageSize'] = 8;
		$data['page'] = max(1,(int)input('get.page'));

		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);

		$label_ids = [];
		foreach ($data['data']['lists'] as $item) {
			!in_array($item['channel_id'],$label_ids) && $label_ids[] = $item['channel_id'];
			!in_array($item['charge_id'],$label_ids) && $label_ids[] = $item['charge_id'];
			!in_array($item['area_id'],$label_ids) && $label_ids[] = $item['area_id'];
		}
		$label_ids && $data['labels'] = $this->db->table('video_label')->where('id in('.implode(',',$label_ids).')')->cates('id');
		$this->assign('data',$data);
		return $this->fetch();
	}
	//上传视频
	public function add()
	{
		$data['channel'] =$this->db->table('video_label')->where(array('flag'=>'channel'))->lists();
		$data['charge'] =$this->db->table('video_label')->where(array('flag'=>'charge'))->lists();
		$data['areas'] =$this->db->table('video_label')->where(array('flag'=>'area'))->lists();

		$id = (int)input('get.id');

		$data['item'] = $this->db->table('video')->where(array('id'=>$id))->item();
		$this->assign('data',$data);
		return $this->fetch();	
	}

	//文件上传接口
	public function upload_img()
	{
		$file =request()->file('file');
		if($file ==null)
		{
			exit(json_encode(array('code'=>1,'msg'=>'没有文件上传')));
		}
		//选择文件的根目录
		$info =$file->move(ROOT_PATH.'public'.DS.'uploads');
		$ext =($info->getExtension());
		if(!in_array($ext, array('jpg','jpeg','gif','png'))){
			//文件支持jpg','jpeg','gif','png'五种格式
			exit(json_encode(array('code'=>1,'msg'=>"文件格式不支持")));
		}
		$img ='/uploads/'.$info->getSaveName();
		exit(json_encode(array('code'=>0,'msg'=>$img)));

	}
	//文件ppt上传接口
	public function upload_ppt(){
		$file =request()->file('file');
		if($file ==null)
		{
			exit(json_encode(array('code'=>1,'msg'=>'没有文件上传')));
		}
		//选择文件的根目录
		$info =$file->move(ROOT_PATH.'public'.DS.'uploads');
		$ext =($info->getExtension());
		if(!in_array($ext, array('ppt','pptx','pdf','doc','jpg','txt','ppt','pptx','xls','docx'))){
			//文件支持jpg','jpeg','gif','png'五种格式
			exit(json_encode(array('code'=>1,'msg'=>"文件格式不支持")));
		}
		$ppt ='/uploads/'.$info->getSaveName();
		exit(json_encode(array('code'=>0,'msg'=>$ppt)));

	}
	//保存数据
	public function save(){
		$id = (int)input('post.id');
		$data['title'] = trim(input('post.title'));
		$data['channel_id'] = (int)input('post.channel_id');
		$data['charge_id'] = (int)input('post.charge_id');
		$data['area_id'] = (int)input('post.area_id');
		$data['img'] = trim(input('post.img'));
		$data['url'] = trim(input('post.url'));
		$data['keywords'] = trim(input('post.keywords'));
		$data['desc'] = trim(input('post.desc'));
		$data['status'] = (int)input('post.status');
		$data['is_vip'] =0;
		$data['file']=input('post.pre_file');

		// dump($data);

		if($data['title'] == ''){
			exit(json_encode(array('code'=>1,'msg'=>'视频名称不能为空')));
		}
		if($data['url'] == ''){
			exit(json_encode(array('code'=>1,'msg'=>'视频地址不能为空')));
		}
		if($id){
			$this->db->table('video')->where(array('id'=>$id))->update($data);
		}else{
			$data['add_time'] = time();
			$this->db->table('video')->insert($data);
		}
		exit(json_encode(array('code'=>0,'msg'=>'保存成功')));
	}
	// 删除视频
	public function delete(){
		$id = (int)input('post.id');
		$this->db->table('video')->where(array('id'=>$id))->delete();
		exit(json_encode(array('code'=>0,'msg'=>'删除成功')));
	}


}	