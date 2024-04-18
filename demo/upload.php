<?php
/**
 * Example Application
 *

 */
require '../vendor/autoload.php';

$smarty = new \Smarty\Smarty;

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$smarty->assign('user','使用者1');

$arrMenu = [
    ['url' => 'info.php', 'content' => 'info頁面 '],
    ['url' => 'main.php', 'content' => 'main頁面 '],
    ['url' => 'page3.html', 'content' => '頁面 3'],
    ['url' => 'page4.html', 'content' => '頁面 4'],
];
$smarty->assign('arrMenu', $arrMenu);

$smarty->assign('group', '競賽組');

// $smarty->assign('expire', 'expired');
// $smarty->assign('expire', 'not access');
$smarty->assign('expire', 'ok');
$smarty->assign(array('start_competition'=> '11/14', 'expire_competition'=> '11/31'));
$smarty->assign(array('start_normal'=> '11/7', 'expire_normal'=> '11/24'));

$smarty->assign('welcome', '你好');
$smarty->assign('explain', '請解釋');
$smarty->assign('project', '專題預覽');

// Start the page
$smarty->display('upload.html');

?>