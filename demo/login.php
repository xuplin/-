<?php
/**
 * Example Application
 *

 */
require 'D:\Alan\wamp64\www\vendor\autoload.php';

$smarty = new \Smarty\Smarty;

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


// Start the page
$smarty->display('login.html');

?>