<?php
namespace app\index\controller;
use think\Session;
use think\Controller;
use Util\data\Sysdb;

class Index extends Controller
{
	
    public function index()
    {
    	$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');
    	$data['time']=Session::get('time');
    	$this->_time = Session('time'); 
    	$user =$this->_user;
    	$time =$this->_time;
    	$this->db =new Sysdb;
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
		$this->assign('site',$site);
		$this->assign('time',date("Y-m-d H:i:s",$time));
    	$this->assign('user',$user);
 		$this->assign('data',$data);
 		//视频功能
		// $video=$this->db->table('video')->where(array('channel_id'=>2,'status'=>1));
		// $this->assign('video',$video);

		$data['pageSize'] = 4;
		$data['page'] = max(1,(int)input('get.page'));

		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);


		//ppt
		$data['ppt']=$this->db->table('ppt')->where($where)->order('id desc')->pages($data['pageSize']);
		$label_ids = [];
		foreach ($data['data']['lists'] as $item) {
			!in_array($item['channel_id'],$label_ids) && $label_ids[] = $item['channel_id'];
			!in_array($item['charge_id'],$label_ids) && $label_ids[] = $item['charge_id'];
			!in_array($item['area_id'],$label_ids) && $label_ids[] = $item['area_id'];
		}
		$label_ids && $data['labels'] = $this->db->table('video_label')->where('id in('.implode(',',$label_ids).')')->cates('id');
		$this->assign('data',$data);
		
		//文档功能
		
		$data['document']=$this->db->table('document')->where($where)->order('id desc')->pages($data['pageSize']);
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
    //登录
    public function login()
    {
    	return $this->fetch();
    }
    //注册
    public function register()
    {
    	return $this->fetch();
    }

    //查找页面
    public function search(){
    	$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');
    	$data['time']=Session::get('time');
    	$this->_time = Session('time'); 
    	$user =$this->_user;
    	$time =$this->_time;
    	$this->db =new Sysdb;
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
		$this->assign('site',$site);
		$this->assign('time',date("Y-m-d H:i:s",$time));
    	$this->assign('user',$user);
 		$this->assign('data',$data);
 

		$data['pageSize'] = 8;
		$data['page'] = max(1,(int)input('get.page'));
		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);
		//ppt
		$data['ppt']=$this->db->table('ppt')->where($where)->order('id desc')->pages($data['pageSize']);
		$label_ids = [];
		foreach ($data['data']['lists'] as $item) {
			!in_array($item['channel_id'],$label_ids) && $label_ids[] = $item['channel_id'];
			!in_array($item['charge_id'],$label_ids) && $label_ids[] = $item['charge_id'];
			!in_array($item['area_id'],$label_ids) && $label_ids[] = $item['area_id'];
		}
		$label_ids && $data['labels'] = $this->db->table('video_label')->where('id in('.implode(',',$label_ids).')')->cates('id');
		$this->assign('data',$data);
		
		$data['video'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);   
		//文档功能
		
		$data['document']=$this->db->table('document')->where($where)->order('id desc')->pages($data['pageSize']);
		$label_ids = [];
		foreach ($data['data']['lists'] as $item) {
			!in_array($item['channel_id'],$label_ids) && $label_ids[] = $item['channel_id'];
			!in_array($item['charge_id'],$label_ids) && $label_ids[] = $item['charge_id'];
			!in_array($item['area_id'],$label_ids) && $label_ids[] = $item['area_id'];
		}
		$label_ids && $data['labels'] = $this->db->table('video_label')->where('id in('.implode(',',$label_ids).')')->cates('id');
		$this->assign('data',$data); 
		// $sea_content=$_POST['sea_content'];
		// var_dump($data['ppt']);
		// var_dump($data['document']);
		// var_dump($data['video']);
    	// return $this->fetch();
    }
    //视频
    public function video(){
    	$id=$_GET["id"];
    	$table="video";
 		$this->db =new Sysdb;
 		$data =$this->db->table($table)->where(array('id'=>$id))->item();
 		$this->assign('data',$data);
 		// var_dump($data);
    	return $this->fetch();
    }
    //获取所有的视频
    public function videos(){
    	
    	$data['time']=Session::get('time');
    	$this->_time = Session('time');
    	$time =$this->_time;
    	$this->assign('time',date("Y-m-d H:i:s",$time));  

    	$this->db =new Sysdb;
 		$data['pageSize'] = 32;
 		$chanel_list=$this->db->table("video_label")->where(array('flag' =>'channel'))->order('id desc')->pages($data['pageSize']);
 		$chanel_list=$this->db->table("video_label")->where(array('flag'=>'area'))->order('id desc')->pages($data['pageSize']);
 		$this->assign("chanel_list",$chanel_list['lists']);	
    	$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');
    	$user =$this->_user;
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
		$this->assign('site',$site);
    	$this->assign('user',$user);
 		$this->assign('data',$data);
 		//全部的显示
 		//先显示video	
		$data['page'] = max(1,(int)input('get.page'));

		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);   	
		$this->assign('data',$data);	
    	return $this->fetch();
    }

    //获取所有的ppt
    public function ppt(){
    	$data['time']=Session::get('time');
    	$this->_time = Session('time');
    	$time =$this->_time;
    	$this->assign('time',date("Y-m-d H:i:s",$time));  
    	$this->db =new Sysdb;
 		$data['pageSize'] = 8;
 		$chanel_list=$this->db->table("video_label")->where(array('flag' =>'channel'))->order('id desc')->pages($data['pageSize']);
 		$chanel_list=$this->db->table("video_label")->where(array('flag'=>'area'))->order('id desc')->pages($data['pageSize']);
 		$this->assign("chanel_list",$chanel_list['lists']);
    	$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');
    	$user =$this->_user;
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
		$this->assign('site',$site);
    	$this->assign('user',$user);
 		$this->assign('data',$data);

 		//全部的显示
 		//先显示video
 	
		$data['pageSize'] = 8;
		$data['page'] = max(1,(int)input('get.page'));
		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);   
		//ppt
		$data['ppt']=$this->db->table('ppt')->where($where)->order('id desc')->pages($data['pageSize']);
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
    //获取所有的文档
    public function document(){
    	$data['time']=Session::get('time');
    	$this->_time = Session('time');
    	$time =$this->_time;
    	$this->assign('time',date("Y-m-d H:i:s",$time));  
    	$this->db =new Sysdb;
 		$data['pageSize'] = 8;
 		$chanel_list=$this->db->table("video_label")->where(array('flag' =>'channel'))->order('id desc')->pages($data['pageSize']);
 		$chanel_list=$this->db->table("video_label")->where(array('flag'=>'area'))->order('id desc')->pages($data['pageSize']);
 		$this->assign("chanel_list",$chanel_list['lists']);
 		

    	$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');
    	$user =$this->_user;
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
		$this->assign('site',$site);
    	$this->assign('user',$user);
 		$this->assign('data',$data);
 		//全部的显示
 		//先显示video
		$data['pageSize'] = 8;
		$data['page'] = max(1,(int)input('get.page'));
		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);   		
		//文档功能
		$data['document']=$this->db->table('document')->where($where)->order('id desc')->pages($data['pageSize']);
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
    //导航标签
    public function tags(){
    	

    	$data['time']=Session::get('time');
    	$this->_time = Session('time');
    	$time =$this->_time;
    	$this->assign('time',date("Y-m-d H:i:s",$time));  

    	$this->db =new Sysdb;
 		$data['pageSize'] = 8;
 		$chanel_list=$this->db->table("video_label")->where(array('flag' =>'channel'))->order('id desc')->pages($data['pageSize']);
 		$chanel_list=$this->db->table("video_label")->where(array('flag'=>'area'))->order('id desc')->pages($data['pageSize']);
 		$this->assign("chanel_list",$chanel_list['lists']);
 		

    	$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');
    	$user =$this->_user;
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
		$this->assign('site',$site);
    	$this->assign('user',$user);
 		$this->assign('data',$data);

 		//全部的显示
 		//先显示video
 	
		$data['pageSize'] = 8;
		$data['page'] = max(1,(int)input('get.page'));

		$data['wd'] = trim(input('get.wd'));
		$where = array();
		$data['wd'] && $where = 'title like "%'.$data['wd'].'%"';
		$data['data'] = $this->db->table('video')->where($where)->order('id desc')->pages($data['pageSize']);   

		//ppt
		$data['ppt']=$this->db->table('ppt')->where($where)->order('id desc')->pages($data['pageSize']);
		$label_ids = [];
		foreach ($data['data']['lists'] as $item) {
			!in_array($item['channel_id'],$label_ids) && $label_ids[] = $item['channel_id'];
			!in_array($item['charge_id'],$label_ids) && $label_ids[] = $item['charge_id'];
			!in_array($item['area_id'],$label_ids) && $label_ids[] = $item['area_id'];
		}
		$label_ids && $data['labels'] = $this->db->table('video_label')->where('id in('.implode(',',$label_ids).')')->cates('id');
		$this->assign('data',$data);
		
		//文档功能
		
		$data['document']=$this->db->table('document')->where($where)->order('id desc')->pages($data['pageSize']);
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
    //登录功能
   	public function dologin()
 	{
 		//使用trim 函数过滤
 		$username = trim(input('post.username'));
 		$password = trim(input('post.password'));
 		$verifycode =trim(input('post.verifycode'));

 		//验证表单
 		if($username =='')
 		{
 			exit(json_encode(array('code'=>1,'msg'=>'用户名不能为空')));
 		}
 		if($password =='')
 		{
 			exit(json_encode(array('code'=>1,'msg'=>'密码不能为空')));
 		}
 		if($verifycode ==''){
 			exit(json_encode(array('code'=>1,'msg'=>'验证码不能为空')));
 		}


 		//验证验证码的正确性
 		if(!captcha_check($verifycode))
 		{
 			exit(json_encode(array('code'=>1,'msg'=>'验证码错误')));
 		}

 		//验证用户
 		$this->db =new Sysdb;
 		$user =$this->db->table('user')->where(array('username'=>$username))->item();

 		if(!$user)
 		{
 			exit(json_encode(array('code'=>1,'msg'=>'用户名不存在')));
 		}
 		if($user['status']==1){
 			exit(json_encode(array('code'=>1,'msg'=>'用户已被禁')));
 		}
 		if(md5($user['username'].$password)!=$user['password'])
 		{
 			exit(json_encode(array('code'=>1,'msg'=>'密码错误')));
 		}
 		if($user!==""){
 			//设置用户的session
	 		session('user',$user);
	 		$time=time();
	 		//设置用户登录的时间
	 		session('time',$time);
 		}
 		

 		exit(json_encode(array('code'=>0,'msg'=>'登录成功')));
 	}

 	//获取当前的详情页面
 	public function getDetail(){
 		//使用trim 函数过滤
 		$id=$_GET["id"];
 		$this->db =new Sysdb;
 		if($id>=100&&$id<10000){
 			$table="ppt";
 		}else if($id>=5&&$id<100){
 			$table="video";
 		}else{
 			$table="document";
 		}
 		$data =$this->db->table($table)->where(array('id'=>$id))->item();
 		
 		$this->assign('data',$data);
 		$data['currentuser']=Session::get('username');
    	$this->_user = Session('user');	
 		$data['time']=Session::get('time');
    	$this->_time = Session('time');
    	$time =$this->_time;
    	$user =$this->_user;
    	$this->assign('time',date("Y-m-d H:i:s",$time));
    	$site = $this->db->table('sites')->where()->item();
    	$site && $site['values'] = json_decode($site['values']);
    	$site && $site ['description'] =json_decode($site['description']);
    	//获取评论详情
    	$comment =$this->db->table('comment')->where(array('comment_id'=>$id,'pass'=>0))->lists();
    	if($comment==false){
    		$length=0;
    	}else{
    		$length=count($comment); 
    	}
    	$this->assign('comment',$comment);
    	$this->assign('length',$length);   	   	
		$this->assign('site',$site);  
		$this->assign('user',$user);
    	return $this->fetch();
 	}
 	//评论功能
 	public function submit(){
 		$this->db =new Sysdb;
 		$data['comment_id']=$_POST["id"];
 		$data['comments']=$_POST["content"];
 		$data['time']=date('Y-m-d H:i:s',time());
	 	//设置用户评论的的时间
 		$this->_user = Session('user');	
 		$user=$this->_user;
 		$res=true;
 		$data['username']=$user['username'];
 		$res = $this->db->table('comment')->insert($data);
 		//$this->db->table('comment')->insert($data)
 		if(!$res){
 			exit(json_encode(array('code'=>1,'msg'=>'评论失败')));	
 		}else{
 			exit(json_encode(array('code'=>0,'msg'=>'评论成功')));	
 		}
 		
    	// var_dump($data);
 	}
 	//注册的功能
 	public function doregister()
 	{
 		$this->db =new Sysdb;
 		$id = (int)input('post.id');
		$data['username'] = trim(input('post.username'));
		$password = trim(input('post.password'));
		if(!$data['username'])
		{
			exit(json_encode(array('code'=>1,'msg'=>'用户名不能为空')));
		}
		if($id==0 && !$password)
		{
			exit(json_encode(array('code'=>1,'msg'=>'密码不能为空')));
		}
		if($password){
			// 密码处理
			$data['password'] = md5($data['username'].$password);
		}
		
		$res = true;
		if($id==0){
			// 检查用户是否已存在
			$item = $this->db->table('user')->where(array('username'=>$data['username']))->item();
			if($item){
				exit(json_encode(array('code'=>1,'msg'=>'该用户已存在')));
			}
			$data['add_time'] = time();
			// 保存用户
			$res = $this->db->table('user')->insert($data);
		}else{
			$this->db->table('user')->where(array('id'=>$id))->update($data);
		}
		
		if(!$res){
			exit(json_encode(array('code'=>1,'msg'=>'注册失败')));
		}
		exit(json_encode(array('code'=>0,'msg'=>'注册成功')));		
	}
	public function doexit(){
		$res = true;
		Session('user',NULL);//退出清空session
		Session('time',NULL);
		$this->success('您已退出登录，请重新登录','/');
		if($res){
			exit(json_encode(array('code'=>1,'msg'=>'退出成功')));
		}
		exit(json_encode(array('code'=>0,'msg'=>'退出失败')));		
	}
 }
