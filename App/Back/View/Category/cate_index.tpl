{include file="../common/header.tpl"}
{include file="../common/sidebar.tpl"}
<script>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 添加分类的链接
			window.location.href = "{$smarty.const.WEB_ROOT}index.php?p=Back&c=category&a=add";
		});
	});
</script>
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
                    <a class="button border-blue button-little" href="{$smarty.const.WEB_ROOT}index.php?p=Back&c=category&a=add">修改</a> 
                    <a class="button border-yellow button-little" href="{$smarty.const.WEB_ROOT}index.php?p=Back&c=category&a=del" onclick="">删除</a>
                </td>
            </tr>
        </table>
    </div>
    </form>
    <br />
</div>
</body>
</html>