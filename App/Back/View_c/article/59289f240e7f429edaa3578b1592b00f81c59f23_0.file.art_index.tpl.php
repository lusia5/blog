<?php
/* Smarty version 3.1.29, created on 2018-02-03 17:28:03
  from "C:\Users\Administrator\Desktop\blog1\App\Back\View\article\art_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7580a3d1b052_70684172',
  'file_dependency' => 
  array (
    '59289f240e7f429edaa3578b1592b00f81c59f23' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\blog1\\App\\Back\\View\\article\\art_index.tpl',
      1 => 1517649741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/header.tpl' => 1,
    'file:../common/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a7580a3d1b052_70684172 ($_smarty_tpl) {
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
			// 设置“添加文章”链接
			window.location.href = '#';
		});
	});
<?php echo '</script'; ?>
>
<div class="admin">
	<form action="#" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" />
            <input type="submit" class="button button-small border-yellow"  value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="200">文章标题</th>
                <th width="120">点击率</th>
                <th width="180">发布时间</th>
                <th width="100">操作</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="id[]" value="" /></td>
                <td>0</td>
                <td>程序人生</td>
                <td>88</td>
                <td>2016-10-10</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a> 
                    <a class="button border-yellow button-little" href="#" >删除</a>
                </td>
            </tr>
        </table>
		<div class="panel-foot text-center">
            <a href="#"><<上一页</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">下一页>></a>
			总页数：5
        </div>
    </div>
    </form>
    <br />
</div>
</body>
</html><?php }
}
