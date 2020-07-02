<?php
namespace app\admins\controller;
use app\admins\controller\BaseAdmin;
use think\Controller;
/**
 *消息管理管理
 */
class Message extends BaseAdmin
{
	public function index()
	{
		//获取评论详情
    	$comment =$this->db->table('comment')->where(array('pass'=>1))->lists();
    	if($comment==false){
    		$length=0;
    	}else{
    		$length=count($comment); 
    	}
    	$this->assign('comment',$comment);
    	$this->assign('length',$length);  
		return $this->fetch();
	}
	// 审核通过
	public function agree(){
		$id = (int)input('post.id');
		$data['pass']=0;
		//更新评论
    	$comment =$this->db->table('comment')->where(array('id'=>$id))->update($data);
		exit(json_encode(array('code'=>0,'msg'=>'审核通过')));
	}
	// 审核不通过
	public function disagree(){
		$id = (int)input('post.id');
		$data['pass']=2;
		//更新评论
    	$comment =$this->db->table('comment')->where(array('id'=>$id))->update($data);
		exit(json_encode(array('code'=>0,'msg'=>'审核不通过')));
	}
	public function disagree_show()
	{
		//获取评论详情
    	$comment =$this->db->table('comment')->where(array('pass'=>2))->lists();
    	if($comment==false){
    		$length=0;
    	}else{
    		$length=count($comment); 
    	}
    	$this->assign('comment',$comment);
    	$this->assign('length',$length);
		return $this->fetch();
	}
}