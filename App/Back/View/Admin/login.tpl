{include file="../common/header.tpl"}

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br /><br />
            <div class="media media-y">
                <a href="#" target="_blank"><img src="{$smarty.const.WEB_ROOT}/Public/Back/images/logo.png" class="radius" alt="后台管理系统" /></a>
            </div>
            <br /><br />
            <form action="{$smarty.const.WEB_ROOT}index.php?p=Back&c=Admin&a=checkLogin" method="post">
            <div class="panel">
                <div class="panel-head"><strong>登录个人博客后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="acc" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求" />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="pwd" placeholder="登录密码" data-validate="required:请填写密码,length#>=8:密码长度不符合要求" />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="captcha" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                            <img src="{$smarty.const.WEB_ROOT}index.php?p=Back&c=Admin&a=captcha" width="80" height="32" class="passcode" onclick="this.src='{$smarty.const.WEB_ROOT}index.php?p=Back&c=Admin&a=captcha&tip='+Math.random();" />
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="checkbox" name="remeber" /> 七天免登陆
                        </div>
                </div>
                <div class="panel-foot text-center"><button class="button button-block bg-main text-big">立即登录后台</button></div>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>