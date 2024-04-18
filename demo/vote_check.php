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
    ['url' => 'page1.html', 'content' => '頁面 1'],
    ['url' => 'page2.html', 'content' => '頁面 2'],
    ['url' => 'page3.html', 'content' => '頁面 3'],
    ['url' => 'page4.html', 'content' => '頁面 4'],
];
$group = [
    ['group' =>'第一隊'],
    ['group' =>'第二隊'],
    ['group' =>'第三隊'],
    ['group' =>'第四隊'],
    ['group' =>'第五隊'],


];
$smarty->assign('group',$group);
$smarty->assign('arrMenu', $arrMenu);
$smarty->assign('test','1');

// Start the page
$smarty->display('vote_check.html');

?>