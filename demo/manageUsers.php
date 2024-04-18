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

$smarty->assign('numVerified', "3");
$arrVerified = [
    ['group' => 'A組', 'group_name' => '審核隊伍1', 'leader' => '隊長1', 'members' => '成員1, 成員2', 'professor' => '教授1', 'needs' => '需求1', 'timeSignup' => '2024-04-06 10:00:00'],
    ['group' => 'B組', 'group_name' => '審核隊伍2', 'leader' => '隊長2', 'members' => '成員3, 成員4', 'professor' => '教授2', 'needs' => '需求2', 'timeSignup' => '2024-04-07 11:00:00'],
    ['group' => 'C組', 'group_name' => '審核隊伍3', 'leader' => '隊長3', 'members' => '成員5, 成員6', 'professor' => '教授3', 'needs' => '需求3', 'timeSignup' => '2024-04-08 12:00:00']
];

$smarty->assign('numNotVerified', "3");

$arrNotVerified = [
    ['group' => 'A組', 'group_name' => '未審核隊伍1', 'leader' => '隊長1', 'members' => '成員1, 成員2', 'professor' => '教授1', 'needs' => '需求1', 'timeSignup' => '2024-04-06 10:00:00'],
    ['group' => 'B組', 'group_name' => '未審核隊伍2', 'leader' => '隊長2', 'members' => '成員3, 成員4', 'professor' => '教授2', 'needs' => '需求2', 'timeSignup' => '2024-04-07 11:00:00'],
    ['group' => 'C組', 'group_name' => '未審核隊伍3', 'leader' => '隊長3', 'members' => '成員5, 成員6', 'professor' => '教授3', 'needs' => '需求3', 'timeSignup' => '2024-04-08 12:00:00']
];

$smarty->assign('arrNotVerified', $arrNotVerified);
$smarty->assign('arrVerified', $arrVerified);

// Start the page
$smarty->display('manageUsers.html');

?>