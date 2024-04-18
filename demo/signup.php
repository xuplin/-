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
$arrMenu = [
    ['url' => 'page1.html', 'content' => '頁面 1'],
    ['url' => 'page2.html', 'content' => '頁面 2'],
    ['url' => 'page3.html', 'content' => '頁面 3'],
    ['url' => 'page4.html', 'content' => '頁面 4'],
];

$smarty->assign('arrMenu', $arrMenu);

$departGroup = [
    ['id' => '1', 'name' => '資訊'],
    ['id' => '2', 'name' => '控制'],
    ['id' => '3', 'name' => '通訊'],
];
$smarty->assign('departGroup', $departGroup);
//有無截止
$smarty->assign('expire', 'none');
//安全認證
$smarty->assign('siteKey', 'your_site_key_here');
$smarty->assign('callback', 'your_callback_function_here');
$smarty->assign('expired_callback', 'your_expired_callback_function_here');

// Start the page
$smarty->display('signup.html');

?>