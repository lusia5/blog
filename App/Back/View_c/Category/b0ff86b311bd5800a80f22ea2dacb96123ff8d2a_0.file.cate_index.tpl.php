<?php
/* Smarty version 3.1.29, created on 2018-02-07 16:30:46
  from "C:\Users\Administrator\Desktop\blog1\App\Back\View\Category\cate_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7ab93672b086_38300802',
  'file_dependency' => 
  array (
    'b0ff86b311bd5800a80f22ea2dacb96123ff8d2a' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\blog1\\App\\Back\\View\\Category\\cate_index.tpl',
      1 => 1517992241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/header.tpl' => 1,
    'file:../common/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a7ab93672b086_38300802 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../common/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 添加分类的链接
			window.location.href = "<?php echo @constant('WEB_ROOT');?>
index.php?p=Back&c=category&a=add";
		});
	});
<?php echo '</script'; ?>
>
<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>分类列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加分类" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
        </div>
        <table class="table table-hover">
		     <tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="240">分类名称</th>
                <th width="*">分类描述</th>
                <th width="100">操作</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="id" value="" /></td>
                <td></td>
                <td>
                    
                </td>
                <td></td>
                <td>
                    <a class="button border-blue button-little" href="<?php echo @constant('WEB_ROOT');?>
index.php?p=Back&c=category&a=add">修改</a> 
                    <a class="button border-yellow button-little" href="<?php echo @constant('WEB_ROOT');?>
index.php?p=Back&c=category&a=del" onclick="">删除</a>
                </td>
            </tr>
        </table>
    </div>
    </form>
    <br />
</div>
</body>
</html><?php }
}
