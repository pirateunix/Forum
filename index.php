<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'Router.php';
require_once '/usr/local/lib/Smarty-3.1.21/libs/Smarty.class.php';

$blogTitle = "Best World Forum ";
$projectDir = __DIR__;
define ('PROJECTDIR', $projectDir);
define ('DIRSEP', DIRECTORY_SEPARATOR);

function autoloader($class)
{
    $class = trim($class, '/\\');
    $parts = explode('\\', $class);
    require_once __DIR__ . '/' . $parts[0] . '/' . $parts[1] . '.php';

}

spl_autoload_register('autoloader');

$smarty = \config\Templater::getInstance()->smarty();
$guest = new \controllers\ControlerUser();
$user = new \models\UserClass();
if ($guest->isonline()) {

    $user->new_user($_SESSION['id']);
    $uid = $user->get_info('user_id');
    $smarty->assign('user_id', $uid);
}


// Вывести верхний колонтитул
$smarty->assign('blog_title', $blogTitle);
$smarty->display('header.tpl');
$router = new Router();
$router->delegate();

print '<pre>';
var_dump($_SESSION['id']);
print '</pre>';

// Вывести нижний колонтитул
$smarty->display('footer.tpl');
?>

