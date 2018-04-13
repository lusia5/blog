<?php
/**
 * 后台管理员控制器 (管理员账户的增删改查等)
 */
class AdminController extends PlatformController {
	protected $model;
	public function __construct(){
		parent::__construct();
		//实例化user模型
		$this->model = Factory::M('UserModel');
	}
    public function loginAction(){
    	//渲染登录模板
        $this->display('login.tpl');
    }
    public function captchaAction(){
    	//实例化验证码类
    	$captcha = Factory::M('Captcha');
    	//调用方法输出图片
    	$captcha->generate();
    }
    /**
     * 验证登录类
     * @return [type] [description]
     */
    public function checkLoginAction(){
    	//接收post传递过来的参数
    	$acc = $this->cleanSql($_POST['acc']);
    	$pwd = $this->cleanSql($_POST['pwd']);
    	$cap = $this->cleanSql($_POST['captcha']);
    	//实例化验证码类调用checkCaptcha方法检验验证码是否准确
    	$captcha = Factory::M('Captcha');
    	if (!$captcha->checkCaptcha($cap)) {
    		# 说明验证码不正确
    		$url = WEB_ROOT."index.php?p=Back&c=Admin&a=login";
    		$this->jump($url,'验证码填写不正确!');
    	}
    	$pwd = md5($pwd);
    	//查询数据库数据验证用户名和密码是否合法
    	$condition = " acc='$acc' and pwd='$pwd'";
    	if($row = $this->model->getRow($condition)){//登录成功
    		if(isset($_POST['remeber'])){
    			$num =$this->secretWords($row['id']); 
                setcookie('REME',$num,time()+3600*24*7);
    		}
            @session_start();
            $_SESSION['admin'] = $row;
            $this->model->upd('login_time='.time().",login_nums=login_nums+1",'id='.$row['id']);
    		$url = WEB_ROOT."index.php?p=Back&c=Manage&a=index";
    		$this->jump($url);
    	}else{//登录失败
    		$url = WEB_ROOT."index.php?p=Back&c=Admin&a=login";
    		$this->jump($url,'账号或密码错误!');
    	}
    }
    /**
     * 注销登录
     * @return void()
     */
    public function logoutAction(){
        @session_start();
        unset($_SESSION['admin']);
        setcookie('REME','');
        $url = WEB_ROOT."index.php?p=Back&c=Admin&a=login";
        $this->jump($url,'注销成功,么么哒!');
    }

}


