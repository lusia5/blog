<?php
/**
 * 后台的平台控制器
 */
class PlatformController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->checkAdmin();
	}
	/**
	 * 判断后台管理员是否登录  阻止用户翻墙
	 */
	protected function checkAdmin(){
		//列出不需要登录验证的动作列表
		$no_need = array(
			//控制器名=>该控制器不要登录验证的动作列表
			'Admin' => array('login','checkLogin','captcha')
		);
		if(isset($no_need[CONTROLLER])&&in_array(ACTION,$no_need[CONTROLLER])){
			return ;
		}
		@session_start();
		if (!isset($_SESSION['admin'])) {
			# 如果没有设置session数据admin  说明没有登录
			#判断是否勾选了七天免登陆
			if(isset($_COOKIE['REME'])){
				$id = $this->outWords($_COOKIE['REME']);
				$row = Factory::M('UserModel')->Row($id);
				$_SESSION['admin'] = $row;
				return ;
			}else{
				$url = WEB_ROOT."index.php?p=Back&c=Admin&a=login";
				$this->jump($url,'你还没有登录,请先登录!');
			}
			
		}
	}
}