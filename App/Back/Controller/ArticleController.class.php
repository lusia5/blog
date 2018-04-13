<?php
/**
 * 文章管理控制器类
 */
class ArticleController extends PlatformController{
	public function indexAction(){
		$this->display('art_index.tpl');
	}
	public function addAction(){
		$this->display('art_add.tpl');
	}
}