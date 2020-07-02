<?php
namespace app\admins\controller;
use app\admins\controller\BaseAdmin;
use think\Request;
/**
 * 网站管理
 */
class Site extends BaseAdmin
{

	public function index()
	{
		$request = Request::instance();
		$domain =$request->domain();
		$ip =$request->ip();

		$site = $this->db->table('sites')->where(array('names'=>'site'))->item();

		$site && $site['values'] = json_decode($site['values']);
		$site['description']=json_decode($site['description']);
		$this->assign('site',$site);

		$this->assign('domain',$domain);
		$this->assign('ip',$ip);
		return $this->fetch();
	}
	public function save()
	{
		//保存当前网站的设置
		$title = trim(input('post.title'));
		$description = trim(input('post.description'));
		$site = $this->db->table('sites')->where(array('names'=>'site'))->item();
		if(!$site){
			$this->db->table('sites')->insert(array('names'=>'site','values'=>json_encode($title),'description'=>json_encode($description)));
		}else{
			$value['values'] = json_encode($title);
			$value['description'] =json_encode($description);
			$this->db->table('sites')->where(array('names'=>'site'))->update($value);
		}
		exit(json_encode(array('code'=>0,'msg'=>'保存成功')));
	}
}