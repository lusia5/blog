<?php
/* Smarty version 3.1.29, created on 2018-01-17 20:30:23
  from "C:\Users\Administrator\Desktop\blog1\App\back\View\common\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5f41df679721_29011949',
  'file_dependency' => 
  array (
    '67535af33770a8a53835e88adfdd592b3baa1b92' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\blog1\\App\\back\\View\\common\\sidebar.tpl',
      1 => 1516191985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5f41df679721_29011949 ($_smarty_tpl) {
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
                <a class="button button-little bg-yellow" href="logout.php">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li class="active"><a href="index.html" class="icon-home"> 开始</a>
                    <ul><li><a href="system.html">分类管理</a></li><li><a href="content.html">文章管理</a></li><li><a href="#">评论管理</a></li><li class="active"><a href="#">相册管理</a></li><li><a href="#">页面管理</a></li><li><a href="#">站长管理</a></li><li><a href="#">友情链接</a></li></ul>
                </li>
                <li><a href="system.html" class="icon-cog"> 分类</a>
            		<ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul>
                </li>
                <li><a href="content.html" class="icon-file-text">文章管理</a>
					<ul><li><a href="#">添加内容</a></li><li class="active"><a href="#">内容管理</a></li><li><a href="#">分类设置</a></li><li><a href="#">链接管理</a></li></ul>
                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div><?php }
}
