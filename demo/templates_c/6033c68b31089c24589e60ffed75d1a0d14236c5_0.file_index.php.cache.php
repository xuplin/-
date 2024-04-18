<?php
/* Smarty version 5.0.0, created on 2024-03-30 08:55:26
  from 'file:index.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_6607d37e4db6d7_51427129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6033c68b31089c24589e60ffed75d1a0d14236c5' => 
    array (
      0 => 'index.php',
      1 => 1711706727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6607d37e4db6d7_51427129 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '7147540376607d37e4bcc83_15259283';
?>
<!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 國立中正大學電機工程學系</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="國立中正大學電機、通訊系專題成果展。" />
		<meta name="keywords" content="專題成果展, 國立中正大學, 電機工程學系, 通訊工程學系" />
		<meta name="author" content="Power Wu"/>
		<meta property="og:url" content="http://exhibition.ee.ccu.edu.tw/" /> 
		<meta property="og:title" content="電機通訊專題成果展 - 國立中正大學電機工程學系" />
		<meta property="og:description" content="國立中正大學電機、通訊系專題成果展。" />
		<meta property="og:image" content="http://exhibition.ee.ccu.edu.tw/images/banner.jpg" />

		<link rel="stylesheet" href="assets/index/css/main.css" />
		<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/index/js/ie/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/index/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/index/css/ie9.css" /><![endif]-->
		<link href="images/banner.jpg" rel="image_src" type="image/jpeg">
	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<h1>電機／通訊專題成果展</h1>
			<p>年度專題成果展隆重登場，為學生生涯畫下完美句點吧！！<br/><!-- 換行 -->
                <?php echo $_smarty_tpl->getValue('date');?>
在<b><font size="7"face="Courier New"><?php echo $_smarty_tpl->getValue('place');?>
</font></b>，讓我們一起共襄盛舉！！
			</p>
		</header>

		<!-- Startup Form -->
		<form id="startup-form" action="main.php">		
			<button>立即前往</button>			
		</form>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="https://ee.ccu.edu.tw/" target="_blank" class="icon fa-globe"><span class="label">國立中正大學電機工程學系</span></a></li>
				<li><a href="https://www.facebook.com/ccuee.ccu" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="mailto:admklc@ccu.edu.tw" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
			<ul class="copyright">
<?php }
}
