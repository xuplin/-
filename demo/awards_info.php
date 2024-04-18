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

$smarty->assign('arrMenu', $arrMenu);
$smarty->assign(array('teamName' => "隊伍1",'url' => 'index.php'));

$smarty->assign(array('MaxYear' => "2024",'MinYear' => '2022'));

// Start the page
$smarty->display('awards_info.html');

?>