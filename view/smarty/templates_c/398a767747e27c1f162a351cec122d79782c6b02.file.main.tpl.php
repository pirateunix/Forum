<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 23:50:44
         compiled from "/usr/www/forum/view/smarty/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5467176354b0c785824745-75136119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398a767747e27c1f162a351cec122d79782c6b02' => 
    array (
      0 => '/usr/www/forum/view/smarty/templates/main.tpl',
      1 => 1449769539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5467176354b0c785824745-75136119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b0c785a12610_63119877',
  'variables' => 
  array (
    'topics' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0c785a12610_63119877')) {function content_54b0c785a12610_63119877($_smarty_tpl) {?><table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
    <tr>
        <td>
            <li><a href="/ShowTreads/posts/topic_id-<?php echo $_smarty_tpl->tpl_vars['row']->value['topic_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['row']->value['theam'];?>
</li>
        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
</td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['row']->value['create_date'];?>
</td>
        <?php } ?>
</table>
<h3>Adding new Topic </h3>
<form action="/ShowTreads/topic_add/" method="POST">
    <label> Theam: <input type="text" name="topic_theam"/> </label>
    <label> Text: <input type="text" name="topic_text"/> </label>
    <input type="submit" value="Go!"/>
</form><?php }} ?>
