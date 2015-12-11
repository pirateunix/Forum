<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-09 22:52:37
         compiled from "/usr/www/forum/view/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100499870654b0075571e6e5-84747529%%*/
if (!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array(
    'file_dependency' =>
        array(
            'b130b865cb2279e11304af1f2b9262c64ecb7469' =>
                array(
                    0 => '/usr/www/forum/view/smarty/templates/header.tpl',
                    1 => 1420529402,
                    2 => 'file',
                ),
        ),
    'nocache_hash' => '100499870654b0075571e6e5-84747529',
    'function' =>
        array(),
    'variables' =>
        array(
            'blog_title' => 0,
        ),
    'has_nocache_code' => false,
    'version' => 'Smarty-3.1.21-dev',
    'unifunc' => 'content_54b007557307c1_86164588',
), false); /*/%%SmartyHeaderCode%%*/ ?>
<?php if ($_valid && !is_callable('content_54b007557307c1_86164588')) {
function content_54b007557307c1_86164588($_smarty_tpl) { ?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['blog_title']->value; ?>
    </title>
</head>
<body>
<h1>Welcome to the <?php echo $_smarty_tpl->tpl_vars['blog_title']->value; ?>
</h1><?php }
} ?>
