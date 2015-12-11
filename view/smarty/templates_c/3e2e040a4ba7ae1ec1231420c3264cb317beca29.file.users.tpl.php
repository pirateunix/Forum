<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-01 19:35:09
         compiled from "/usr/www/forum/view/smarty/templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150995403954f3156664c987-75631616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2e040a4ba7ae1ec1231420c3264cb317beca29' => 
    array (
      0 => '/usr/www/forum/view/smarty/templates/users.tpl',
      1 => 1425216903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150995403954f3156664c987-75631616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f315666547c2_11332611',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f315666547c2_11332611')) {function content_54f315666547c2_11332611($_smarty_tpl) {?><form action="/ControlerUser/entering/" method="post">
    Логин: <input type="text" name="login" />

    Пароль: <input type="password" name="password" />
    <input type="submit" value="Войти" name="log_in" />

</form><?php }} ?>
