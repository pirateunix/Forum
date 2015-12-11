<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 23:50:24
         compiled from "/usr/www/forum/view/smarty/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159969244154b007557366b6-29359604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823d0f40f69a6f8460694d2c3e46479de8020fb1' => 
    array (
      0 => '/usr/www/forum/view/smarty/templates/footer.tpl',
      1 => 1449769539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159969244154b007557366b6-29359604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b00755786626_54265125',
  'variables' => 
  array (
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b00755786626_54265125')) {function content_54b00755786626_54265125($_smarty_tpl) {?><hr>
<a href='/'>Home</a> || <a href='/ControlerUser/registration/'>Registration</a> ||<?php if (isset($_smarty_tpl->tpl_vars['user_id']->value)) {?> <a
        href='/ControlerUser/logout/'>Logout</a> <?php } else { ?> <a href='/ControlerUser/'>Login</a> <?php }?>
</head>
</body>
</html><?php }} ?>
