<?php
/**
 * Example Application
 *

 */
require 'C:\wamp64\www\vendor\autoload.php';

$smarty = new \Smarty\Smarty;

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;


$news = array(
    'title' => '最新消息',
    'content' => '可喜可賀'
);

$smarty->assign('user','使用者1');


$arrMenu = [
    ['url' => 'page1.html', 'content' => '頁面 1'],
    ['url' => 'page2.html', 'content' => '頁面 2'],
    ['url' => 'page3.html', 'content' => '頁面 3'],
    ['url' => 'page4.html', 'content' => '頁面 4'],
];

$smarty->assign('arrMenu', $arrMenu);


$arrItem = [
    ['title' => '標題1', 'content' => '頁面1', 'time' => '1/1'],
    ['title' => '標題2', 'content' => '頁面2', 'time' => '1/2'],
    ['title' => '標題3', 'content' => '頁面3', 'time' => '1/3'],
];

$smarty->assign('arrItem', $arrItem);


// Start the page
$smarty->display('info.html');

?>