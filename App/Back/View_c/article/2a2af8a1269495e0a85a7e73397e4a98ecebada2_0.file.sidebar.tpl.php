<?php
/* Smarty version 3.1.29, created on 2018-03-08 12:21:30
  from "C:\Users\Administrator\Desktop\blog1\App\Back\View\common\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aa12aca3273c3_98933835',
  'file_dependency' => 
  array (
    '2a2af8a1269495e0a85a7e73397e4a98ecebada2' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\blog1\\App\\Back\\View\\common\\sidebar.tpl',
      1 => 1520511657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa12aca3273c3_98933835 ($_smarty_tpl) {
?>
<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="<?php echo @constant('WEB_ROOT');?>
/Public/Back/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Admin&a=logout">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav" >
                <li class="active" ><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Manage&a=index" class="icon-home"> 开始</a>
                    <ul id="select"><li class="active"><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=category&a=index">分类管理</a></li><li><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Article&a=index">文章管理</a></li><li><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Comment&a=index">评论管理</a></li><li ><a href="#">相册管理</a></li><li><a href="#">页面管理</a></li><li><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Master&a=index">站长管理</a></li><li><a href="#">友情链接</a></li></ul>
                </li>
                <li><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=category&a=index" class="icon-cog"> 分类</a>
            		<ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul>
                </li>
                <li><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Article&a=index" class="icon-file-text">文章管理</a>
					<ul><li><a href="<?php echo @constant('WEB');?>
index.php?p=Back&c=Article&a=add">添加内容</a></li><li class="active"><a href="#">内容管理</a></li><li><a href="#">分类设置</a></li><li><a href="#">链接管理</a></li></ul>
                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['admin']['acc'];?>
，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="<?php echo @constant('WEB');?>
index.php" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>


<?php }
}
