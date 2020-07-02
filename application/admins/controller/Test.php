<?php
namespace app\admins\controller;
use think\Controller;
use Util\data\Sysdb;

 /**
  * 测试用例
  */
 class Test extends Controller
 {
 	
 	public function index()
 	{
 		$this->db = new Sysdb;
 		$res =$this->db->table('admins')->field('id,username')->lists();

 		dump($res);

 		echo "<hr>";
 		$res2 =$this->db->table('admins')->field('id,username')->cates('username');
 		dump($res2);
 	}
 	
 }
 ?>