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
$smarty->assign('signup_info','不要搞事
                               不要搞事');
// $question_content=[
//     'question_content'=>'你好',
//     'question_content'=>'真棒',
// ]
$smarty->assign('question_num', '問題編號：1');
$smarty->assign('question_content', '第一個問題的內容。');
// Start the page
$smarty->display('signup_info.html');

?>