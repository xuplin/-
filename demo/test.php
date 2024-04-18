<?php
/**
 * Example Application
 *

 */


 //負責幫我看初始展示
 require '../vendor/autoload.php';

 $smarty = new \Smarty\Smarty;

 $smarty->debugging = true;
 $smarty->caching = true;
 $smarty->cache_lifetime = 120;
 //$smarty->force_compile = true;
 $smarty->debugging = true;
 $smarty->caching = true;
 $smarty->cache_lifetime = 120;
 // $smarty->assign("title", "測試用的網頁標題");
 // $smarty->assign("content", "測試用的網頁內容");
 // 上面兩行也可以用這行代替
 $smarty->assign(array("title" => "測試用的網頁標題", "content" => "測試用的網頁內容"));
 $smarty->display('awards.html');