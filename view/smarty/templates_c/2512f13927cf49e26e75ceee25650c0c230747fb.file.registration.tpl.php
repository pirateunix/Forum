<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 23:50:54
         compiled from "/usr/www/forum/view/smarty/templates/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111778633054f2beeb6b1267-63678756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2512f13927cf49e26e75ceee25650c0c230747fb' => 
    array (
      0 => '/usr/www/forum/view/smarty/templates/registration.tpl',
      1 => 1449769539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111778633054f2beeb6b1267-63678756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f2beeb6be531_11183134',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f2beeb6be531_11183134')) {function content_54f2beeb6be531_11183134($_smarty_tpl) {?><form method="post" action="/ControlerUser/isreg">
    Логин: <input id="login" type="text" name="login"/><br/>
    Пароль: <input id="pass" type="password" name="password"/><br/>
    Подтверждение: <input id="re_pass" type="password" name="password2"/><br/>
    Email: <input id="mail" type="text" name="mail"/><br/>
    <label><input id="no_xyz" type="checkbox" name="lic" value="ok"/> Обязуюсь все делать хорошо!<br/></label><br/>
    <input type="submit" name="GO" value="Регистрация">
</form><?php }} ?>
