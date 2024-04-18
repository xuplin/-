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

$smarty->assign(array('error'=>'1','status'=>'something error'));
$smarty->assign(array('btnURL'=>'index_html.php','btnIcon'=>'red','btnName'=>'index.html的按鈕'));

// Start the page
$smarty->display('sign.html');

?>