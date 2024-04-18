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
    ['url' => 'info.php', 'content' => 'info頁面 '],
    ['url' => 'main.php', 'content' => 'main頁面 '],
    ['url' => 'page3.html', 'content' => '頁面 3'],
    ['url' => 'page4.html', 'content' => '頁面 4'],
];
$vote = [
    ['group' => '第一隊', 'count' => '100'],
    ['group' => '第二隊', 'count' => '13'],
    ['group' => '第三隊', 'count' => '12'],
    ['group' => '第四隊', 'count' => '1'],
    ['group' => '第五隊', 'count' => '1'],

];

$smarty->assign('vote', $vote);
$smarty->assign('arrMenu', $arrMenu);

// Start the page
$smarty->display('voting.html');

?>