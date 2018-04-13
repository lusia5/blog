<?php
/* Smarty version 3.1.29, created on 2018-02-13 13:57:53
  from "C:\Users\Administrator\Desktop\blog1\App\Back\View\Manage\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a827e61bd9c54_56043635',
  'file_dependency' => 
  array (
    '73372426ea48dee4e987a4b687f12348b0ad829d' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\blog1\\App\\Back\\View\\Manage\\index.tpl',
      1 => 1517650399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/header.tpl' => 1,
    'file:../common/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a827e61bd9c54_56043635 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/Users/Administrator/Desktop/blog1/Vendor/Smarty/plugins\\modifier.date_format.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../common/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="<?php echo @constant('WEB_ROOT');?>
/Public/Back/images/face.jpg" width="120" class="radius-circle" /><br />
                    <?php echo $_SESSION['admin']['acc'];?>

                </div>
                <div class="panel-foot bg-back border-back">您好，<?php echo $_SESSION['admin']['acc'];?>
，这是您第<?php echo $_SESSION['admin']['login_nums']+1;?>
次登录，上次登录为<?php echo smarty_modifier_date_format($_SESSION['admin']['login_time'],'%Y-%m-%d %H:%m');?>
。</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                	<li><span class="float-right badge bg-red">88</span><span class="icon-user"></span> 会员</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-file"></span> 文章</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-shopping-cart"></span> 订单</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-database"></span> 数据库</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
            <div class="alert">
                <div class="alert alert-yellow"><span class="close"></span><strong>提示：</strong>欢迎回家！</div>
                <h4>今日待处理事项</h4>
                <p class="text-gray padding-top">请记得每天保持好心情!</p>
            	<a target="_blank" class="button bg-dot icon-code" href="#"> 下载示例代码</a> 
            	<a target="_blank" class="button bg-main icon-download" href="#"> 下载ICFrame框架</a> 
            	<a target="_blank" class="button border-main icon-file" href="#"> ICFrame框架使用教程</a>
            </div>
            <div class="panel">
            	<div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr><th colspan="2">服务器信息</th></tr>
                    <tr><td width="110" align="right">操作系统：</td><td><?php echo @constant('PHP_OS');?>
</td></tr>
                    <tr><td align="right">Web服务器：</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?>
</td></tr>
                    <tr><td align="right">服务器IP：</td><td><?php echo $_SERVER['SERVER_ADDR'];?>
</td></tr>
                    <tr><td align="right">数据库：</td><td>MySQL</td></tr>
                </table>
            </div>
        </div>
    </div>
   
</div>
</body>
</html><?php }
}
