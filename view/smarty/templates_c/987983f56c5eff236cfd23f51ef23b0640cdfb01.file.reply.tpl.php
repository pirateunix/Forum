<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-05 10:06:50
         compiled from "/usr/www/forum/view/smarty/templates/reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15921005554b137bd69f519-05423058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987983f56c5eff236cfd23f51ef23b0640cdfb01' => 
    array (
      0 => '/usr/www/forum/view/smarty/templates/reply.tpl',
      1 => 1428206794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15921005554b137bd69f519-05423058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b137bd763e71_40775373',
  'variables' => 
  array (
    'topic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b137bd763e71_40775373')) {function content_54b137bd763e71_40775373($_smarty_tpl) {?><h3>Enter reply: </h3>
<form action="/ShowTreads/reply/topic_id-<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_id'];?>
" method="POST">
<label> Title: <input type="text" name="post_text" /> </label>
<input type="submit" value="Go!" />
</form><?php }} ?>
