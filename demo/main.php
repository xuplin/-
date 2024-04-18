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


 $smarty->assign(array("user" => "使用者1", "content" => "測試用的網頁內容"));

 $arrMenu = [
    ['url' => 'page1.html', 'content' => '頁面 1'],
    ['url' => 'page2.html', 'content' => '頁面 2'],
    ['url' => 'page3.html', 'content' => '頁面 3'],
    ['url' => 'page4.html', 'content' => '頁面 4'],
];

$smarty->assign('arrMenu', $arrMenu);
$smarty->assign(array("date" => "4/7"));

$smarty->assign(array("btnBannerURL" => "index.php","btnBannerContent" => "index.html的按鈕?"));


$news = array(
    'title' => '最新消息',
    'content' => 'news按鈕'
);
$info = array(
    'title' => '報名須知',
    'content' => '只到11/11'
);
$smarty->assign('news', $news);
$smarty->assign('info ', $info );

$arrFeatures = array(
    0 => array(
        'icon' => 'icon1',
        'title' => '標題1',
        'content' => '內容1'
    ),
    1 => array(
        'icon' => 'icon2',
        'title' => '標題2',
        'content' => '內容2'
    ),
    2 => array(
        'icon' => 'icon3',
        'title' => '標題3',
        'content' => '內容3'
    ),
    3 => array(
        'icon' => 'icon4',
        'title' => '標題4',
        'content' => '內容4'
    )
);

// 將變數賦值給 Smarty 模板
$smarty->assign('arrFeatures', $arrFeatures);


$arrDateInfo = array(
    array(
        'date' => '2024-04-01',
        'matter' => '重要事項 1',
        'content' => 'index.php',
        'link' => 'index.php'
    ),
    array(
        'date' => '2024-04-02',
        'matter' => '重要事項 2',
        'content' => '內容描述 2',
        'link' => 'detail2.php'
    )
    
);

// 將變數賦值給 Smarty 模板
$smarty->assign('arrDateInfo', $arrDateInfo);



//  $smarty->assign(array("title" => "測試用的網頁標題", "content" => "測試用的網頁內容"));
 $smarty->display('main.html');