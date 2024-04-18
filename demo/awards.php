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
$smarty->assign('MinYear', 2022);
$smarty->assign('MaxYear', 2023);
$smarty->assign('group', [
    2022 => [
        ['name' => '隊伍1', 'project' => '專題1', 'student' => '學生1', 'professor' => '教授1', 'prize' => '獎項1'],
        ['name' => '隊伍2', 'project' => '專題2', 'student' => '學生2', 'professor' => '教授2', 'prize' => '獎項2'],
        ['name' => '隊伍3', 'project' => '專題3', 'student' => '學生3', 'professor' => '教授3', 'prize' => '獎項3']
    ],
    2023 => [
        ['name' => '隊伍4', 'project' => '專題4', 'student' => '學生4', 'professor' => '教授4', 'prize' => '獎項4'],
        ['name' => '隊伍5', 'project' => '專題5', 'student' => '學生5', 'professor' => '教授5', 'prize' => '獎項5'],
        ['name' => '隊伍6', 'project' => '專題6', 'student' => '學生6', 'professor' => '教授6', 'prize' => '獎項6']
    ]
]);



// Start the page
$smarty->display('awards.html');

?>