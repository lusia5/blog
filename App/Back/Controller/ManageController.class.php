<?php 
/**
 * 后台管理平台控制器
 */
class ManageController extends PlatformController{
	public function indexAction(){
        $this->display('index.tpl');
    }
}