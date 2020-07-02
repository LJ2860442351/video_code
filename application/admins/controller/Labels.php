<?php
namespace app\admins\controller;
use app\admins\controller\BaseAdmin;

/**
 *标签管理
 */
class Labels extends BaseAdmin
{
	//专业类型
	public function channel()
	{
		$channel =$this->db->table('video_label')->where(array('flag'=>'channel'))->lists();
		$this->assign('data',$channel);
		return $this->fetch();
	}
	//是否付费
	public function charge()
	{
		$charge =$this->db->table('video_label')->where(array('flag'=>'charge'))->lists();
		$this->assign('data',$charge);
		return $this->fetch();
	}
	//视频来源
	public function area()
	{
		$area =$this->db->table('video_label')->where(array('flag'=>'area'))->lists();
		$this->assign('data',$area);
		return $this->fetch();
	}

	//保存添加按钮
	public function save(){
		$flag = trim(input('post.flag'));
		//.斜杠表示前端提交过来的数据是数组，前端提交的是数组
		$ords = input('post.ords/a');
		$titles = input('post.titles/a');
		$status = input('post.status/a');

		foreach ($ords as $key => $value) {
			// 新增一个菜单
			$data['flag'] = $flag;
			$data['ord'] = $value;
			$data['title'] = $titles[$key];
			$data['status'] = isset($status[$key]) ? 1 : 0;
			if($key==0 && $data['title']){
				$this->db->table('video_label')->insert($data);
			}
			if($key > 0){
				if($data['title']==''){
					// 删除菜单
					$this->db->table('video_label')->where(array('id'=>$key))->delete();
				}else{
					// 修改菜单
					$this->db->table('video_label')->where(array('id'=>$key))->update($data);
				}
			}
			
		}

		exit(json_encode(array('code'=>0,'msg'=>'保存成功')));
	}
}