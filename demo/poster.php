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
$smarty->assign('year', '2024');

$departGroup = [
    ['id' => '1', 'name' => '資訊','count' => '1'],
    ['id' => '2', 'name' => '控制','count' => '2'],
    ['id' => '3', 'name' => '通訊','count' => '1'],
];
$smarty->assign('departGroup', $departGroup);



$group = [
    [
        ['name' => '隊伍1', 'project' => '專題1', 'professor' => '教授1', 'leader' => '隊長1', 'students' => '學生1']
    ],
    [
        ['name' => '隊伍2', 'project' => '專題2', 'professor' => '教授2', 'leader' => '隊長2', 'students' => '學生2'],
        ['name' => '隊伍3', 'project' => '專題3', 'professor' => '教授3', 'leader' => '隊長3', 'students' => '學生3']
    ],
    [
        ['name' => '隊伍4', 'project' => '專題4', 'professor' => '教授4', 'leader' => '隊長4', 'students' => '學生4']
    ]
];
$smarty->assign('group', $group);

// Start the page
$smarty->display('poster.html');

?>