<?php
/* Smarty version 3.1.29, created on 2018-02-03 09:51:50
  from "C:\Users\Administrator\Desktop\blog1\App\Back\View\Admin\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7515b6445b32_35797779',
  'file_dependency' => 
  array (
    'bf78be175ba93de04c0a64c9f49c97c5a7fab50b' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\blog1\\App\\Back\\View\\Admin\\login.tpl',
      1 => 1517620018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/header.tpl' => 1,
  ),
),false)) {
function content_5a7515b6445b32_35797779 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br /><br />
            <div class="media media-y">
                <a href="#" target="_blank"><img src="<?php echo @constant('WEB_ROOT');?>
/Public/Back/images/logo.png" class="radius" alt="后台管理系统" /></a>
            </div>
            <br /><br />
            <form action="<?php echo @constant('WEB_ROOT');?>
index.php?p=Back&c=Admin&a=checkLogin" method="post">
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
                            <img src="<?php echo @constant('WEB_ROOT');?>
index.php?p=Back&c=Admin&a=captcha" width="80" height="32" class="passcode" onclick="this.src='<?php echo @constant('WEB_ROOT');?>
index.php?p=Back&c=Admin&a=captcha&tip='+Math.random();" />
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
</html><?php }
}
