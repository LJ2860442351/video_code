<?php
namespace app\admins\controller;
use think\Controller;
use Util\data\Sysdb;

/**
 * 基本设置
 */
class BaseAdmin extends controller
{
	//判断用户是否登陆
	public function __construct()
	{
		parent::__construct();
		//判断session是否存在admin
		$this->_admin =session('admin');
		//未登录的用户不允许访问
		if(!$this->_admin)
		{
			header('Location:/admins.php/admins/Account/login');
			exit;
		}
		//判断是否有权限访问
		$this->db =new Sysdb;
	}
}