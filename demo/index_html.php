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
 //$smarty->force_compile = true;
 // $smarty->assign("title", "測試用的網頁標題");
 // $smarty->assign("content", "測試用的網頁內容");
 // 上面兩行也可以用這行代替
 $smarty->assign(array("date" => "3/31", "place" => "工學院一館"));
 $smarty->display('index.html');