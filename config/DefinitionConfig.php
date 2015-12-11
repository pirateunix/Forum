<?php

//TODO:надо добавить namespase
//FIXME:После того как добавлю - это надо переделать
/*
require_once '/usr/www/forum/models/ServiceContainer.php';

$container = new ServiceContainer();

$container['smarty'] = function() {
    require_once('/usr/local/lib/Smarty-3.1.21/libs/Smarty.class.php');
    $smarty = new Smarty();
    $smarty->template_dir = '/usr/www/forum/view/smarty/templates';
    $smarty->compile_dir = '/usr/www/forum/view/smarty/templates_c';
    $smarty->cache_dir = '/usr/www/forum/view/smarty/cache';
    $smarty->config_dir = '/usr/www/forum/view/smarty/configs';
    $blog_title = "Best World Forum ";
    return $smarty;
};
$container['UserClass'] = function() {
    require_once(PROJECTDIR.'/models/UserClass.php');
    return new UserClass();
};
