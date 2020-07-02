<?php
namespace app\admins\controller;
use think\Controller;
use Util\data\Sysdb;

/**
 * 用户列表
 */
class User extends BaseAdmin
{
	
	public function index()
	{
		$data['lists'] = $this->db->table('user')->lists();
		$this->assign('data',$data);
		return $this->fetch();
	}

	public function add()
	{
		$id = (int)input('get.id');

		$data['item'] = $this->db->table('user')->where(array('id'=>$id))->item();

		$data['lists'] = $this->db->table('user')->cates('id');
		$this->assign('data',$data);	
		return $this->fetch();
	}

	//添加用户
	public function save()
	{		
		$id = (int)input('post.id');
		$data['username'] = trim(input('post.username'));
		$password = trim(input('post.password'));
		$data['status'] = (int)(input('post.status'));

		if(!$data['username'])
		{
			exit(json_encode(array('code'=>1,'msg'=>'用户名不能为空')));
		}
		if($id==0 &&!$password)
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
			exit(json_encode(array('code'=>1,'msg'=>'保存失败')));
		}
		exit(json_encode(array('code'=>0,'msg'=>'保存成功')));		
	}

	//删除用户
	public function delete(){
		$id = (int)input('post.id');
		$res = $this->db->table('user')->where(array('id'=>$id))->delete();
		if(!$res){
			exit(json_encode(array('code'=>1,'msg'=>'删除失败')));
		}
		exit(json_encode(array('code'=>0,'msg'=>'删除成功')));
	}

}