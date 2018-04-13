<?php
/**
 * 基础控制器类
 */
class Controller {
	// 定义一个属性,用于保存Smarty对象
	protected $smarty;
	/**
	 * 构造方法
	 */
	public function __construct() {
		// 初始化文件编码
		$this->initCode();
		// 初始化Smarty
		$this->initSmarty();
	}
	/**
	 * 初始化文件编码
	 */
	protected function initCode() {
		header("Content-type:text/html;Charset=utf-8");
	}
	/**
	 * 初始化Smarty
	 */
	protected function initSmarty() {
		// 实例化Smarty
		$this->smarty = new Smarty;
		// 设置模板路径
		$this->smarty->setTemplateDir(CURRENT_VIEW_DIR . CONTROLLER . '/');
		// 设置编译文件路径
		$this->smarty->setCompileDir(APP_DIR . PLATFORM . '/View_c/' . CONTROLLER . '/');
	}
	protected function assign($name, $value) {
		// 调用smarty对象的assign方法
		$this->smarty->assign($name, $value);
	}
	protected function display($tpl) {
		// 调用smarty对象的display方法
		$this->smarty->display($tpl);
	}
	/**
	 * 封装跳转方法
	 * @param $url 跳转的页面路径
	 * @param $info 跳转时提示信息
	 * @param $time 等待时间
	 */
	protected function jump($url,$info,$time=2){
		//先判断是立即跳转还是刷新跳转
		if (is_null($info)) {
			# 立即跳转
			header("location:$url");
			die;
		}else{
			//刷新跳转
			//利用定界符将模板输出
			echo <<<TIPS
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			    <title>提示信息</title>
			    <style type='text/css'>
			        * {margin:0; padding:0;}
			        div {width:390px; height:287px; border:1px #09C solid; position:absolute; left:50%; margin-left:-195px; top:10%;}
			        div h2 {width:100%; height:30px; line-height:30px; background-color:#09C; font-size:14px; color:#FFF; text-indent:10px;}
			        div p {height:120px; line-height:120px; text-align:center;}
			        div p strong {font-size:26px;}
			    </style>
				<div>
			        <h2>提示信息</h2>
			        <p>
			            <strong>$info</strong><br />
						页面在<span id="second">$time</span>秒后会自动跳转，或点击<a id="tiao" href="$url">立即跳转</a>
			        </p>
			    </div>
			    <script type="text/javascript">
			        var url = document.getElementById('tiao').href;
			        function daoshu(){
			            var scd = document.getElementById('second');
			            var time = --scd.innerHTML;
			            if(time<=0){
			                window.location.href = url;
			                clearInterval(mytime);
			            }
			        }
			        var mytime = setInterval("daoshu()",1000);
			    </script>
TIPS;
			die;
		}
	}
	/**
	 * 防sql注入
	 * @param str 接收的表单数据
	 */
	public function cleanSql($str){
		//过滤由于用户禁用了js而接收的空数据
		if (empty($str)) {
    		$url = WEB_ROOT."index.php?p=Back&c=Admin&a=login";
    		$this->jump($url,'填写数据不能为空!');
    	}
    	//返回防xss处理过得数据
		return addslashes(strip_tags(trim($str)));
	}
	/**
	 * 封装简易的数据加密类
	 * @param  [type]  $str  需要加密的字符串
	 * @param  integer $num1 前面拼接的随机数个数
	 * @param  integer $num2 后面拼接的随机数个数
	 * @return 返回加密字符串     
	 */
	protected function secretWords($str,$num1=5,$num2=4){
		//前后
		//拼接A-Z,0-9,a-z为一个大数组
		$char_array=array_merge(range('A','Z'),range(0,9),range('a','z'));
		//返回一个包含$num1个随机键名的数组
		$arr1 = array_rand($char_array,$num1);
		shuffle($arr);//打乱数组顺序
		//创建空字符串来存储随机数
		$Rword = '';
		//将4个下标对应的$char_array中的元素取出来
		foreach ($arr1 as $i){
		    $Rword.=$char_array[$i];
		}
		//在中间拼接需加密数据
		$Rword .= $str;
		$arr2 = array_rand($char_array,$num2);
		shuffle($arr);//打乱数组顺序
		//将4个下标对应的$char_array中的元素取出来
		foreach ($arr2 as $j){
		    $Rword.=$char_array[$j];
		}
		return $Rword;
	}
	/**
	 * 封装与上面相对应的解密类
	 * @param  [type]  $str  需解密的字符串
	 * @param  integer $num1 与加密相对应的截取前面数的个数
	 * @param  integer $num2 与加密相对应的截取前面数的个数
	 * @return 解密后的字符串
	 */
	protected function outWords($str,$num1=5,$num2=4){
		$word = substr($str,$num1,-$num2);
		return $word;
	}
}