{include file="../common/header.tpl"}
{include file="../common/sidebar.tpl"}
<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="{$smarty.const.WEB_ROOT}/Public/Back/images/face.jpg" width="120" class="radius-circle" /><br />
                    {$smarty.session.admin.acc}
                </div>
                <div class="panel-foot bg-back border-back">您好，{$smarty.session.admin.acc}，这是您第{$smarty.session.admin.login_nums+1}次登录，上次登录为{$smarty.session.admin.login_time|date_format:'%Y-%m-%d %H:%m'}。</div>
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
                    <tr><td width="110" align="right">操作系统：</td><td>{$smarty.const.PHP_OS}</td></tr>
                    <tr><td align="right">Web服务器：</td><td>{$smarty.server.SERVER_SOFTWARE}</td></tr>
                    <tr><td align="right">服务器IP：</td><td>{$smarty.server.SERVER_ADDR}</td></tr>
                    <tr><td align="right">数据库：</td><td>MySQL</td></tr>
                </table>
            </div>
        </div>
    </div>
   
</div>
</body>
</html>