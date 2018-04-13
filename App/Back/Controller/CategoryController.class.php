<?php
/**
 * 分类管理控制器类
 */
class CategoryController extends PlatformController{
    protected $model;
    public function __construct(){
        parent::__construct();
        $this->model = Factory::M('CategoryModel');
    }
	public function indexAction(){
		$this->display('cate_index.tpl');
	}

    /**
     * 添加分类
     */
	public function addAction(){
        if($_POST){

            if($this->model->my_query($_POST)){
                $url = WEB_ROOT."index.php?p=Back&c=Category&a=index";
                $this->jump($url,'新增成功');
            }
        }
        $data = $this->model->getTree();
        $this->assign('data',$data);
        $this->display('cate_add.tpl');

	}
}