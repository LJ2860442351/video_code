<?php
namespace app\admins\controller;
use think\Controller;
use Util\data\Sysdb;

/**
 * 首页内容
 */
class Home extends BaseAdmin
{
	public function index()
	{
		$menus =false;
		$role = $this->db->table('admin_groups')->where(array('gid'=>$this->_admin['gid']))->item();
		if($role){
			$role['rights'] = (isset($role['rights']) && $role['rights']) ? json_decode($role['rights'],true) : [];
		}
		if($role['rights']){
			$where = 'mid in('.implode(',',$role['rights']).') and ishidden=0 and status=0';
			$menus = $this->db->table('admin_menus')->where($where)->cates('mid');
			$menus && $menus = $this->gettreeitems($menus);
		}
		$site = $this->db->table('sites')->where(array('names'=>'site'))->item();
		$site && $site['values'] = json_decode($site['values']);
		$site && $site['description'] = json_decode($site['description']);
		$this->_admin = session('admin');
		$admin =$this->_admin;

		//传到前端
		$this->assign('site',$site);
		$this->assign('menus',$menus);
		$this->assign('admin',$admin);
		$this->assign('role',$role);
		return $this->fetch();
	}

	//获取树节点算法
	private function gettreeitems($items){
		$tree = array();
		foreach ($items as $item) {
			if(isset($items[$item['pid']])){
				$items[$item['pid']]['children'][] = &$items[$item['mid']];
			}else{
				$tree[] = &$items[$item['mid']];
			}
		}
		return $tree;
	}

	public function welcome()
	{
		return $this->fetch();
	}
}
