<?php

// Include Smarty Library
require 'Smarty/Smarty.class.php';

// Initializing Smarty
$smarty = new Smarty;

$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


?> 