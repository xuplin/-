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


$smarty->assign('numParticipateCompetition', "3");

$arrParticipateCompetition = [
    ['group' => 'A組', 'group_name' => '隊伍A', 'leader' => '隊長A', 'members' => '成員A1, 成員A2', 'professor' => '教授A', 'grade_average' => '85'],
    ['group' => 'B組', 'group_name' => '隊伍B', 'leader' => '隊長B', 'members' => '成員B1, 成員B2', 'professor' => '教授B', 'grade_average' => '78'],
    ['group' => 'C組', 'group_name' => '隊伍C', 'leader' => '隊長C', 'members' => '成員C1, 成員C2', 'professor' => '教授C', 'grade_average' => '92']
];
$smarty->assign('arrParticipateCompetition', $arrParticipateCompetition);
// Start the page
$smarty->display('manageReviewer.html');

?>