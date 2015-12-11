<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 23:50:24
         compiled from "/usr/www/forum/view/smarty/templates/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29470273654b0cf2b9af3f1-38323135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fea4070542ceb09d31d28c66df6e7460c239dc7' => 
    array (
      0 => '/usr/www/forum/view/smarty/templates/posts.tpl',
      1 => 1449769539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29470273654b0cf2b9af3f1-38323135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b0cf2b9c52d2_81421357',
  'variables' => 
  array (
    'topic' => 0,
    'posts' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0cf2b9c52d2_81421357')) {function content_54b0cf2b9c52d2_81421357($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['topic']->value['text'];?>
</h3>
<table border="1">
    <tr>
        <th>Text</th>
        <th>Author</th>
        <th>Date</th>
        <th>Delete</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
</td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['post_time'];?>
</td>
        <td>
            <form action="/ShowTreads/del/topic_id-<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_id'];?>
/post_id-<?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
/">
                <p><input type="submit" value="del"/></p>
            </form>
        </td>
        <?php } ?>
</table>
<form action="/ShowTreads/show_reply/topic_id-<?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_id'];?>
/">
    <p><input type="submit" value="reply"/></p>
</form><?php }} ?>
