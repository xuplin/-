<?php
/* Smarty version 5.0.0, created on 2024-04-04 13:04:42
  from 'file:voting.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea56a359ad2_08903688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0a184e12e2bf0d73bbaf9dbcc73239ad92c17b' => 
    array (
      0 => 'voting.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
))) {
function content_660ea56a359ad2_08903688 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
?><!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 開票結果</title>
		<meta charset="utf-8" />
		<meta http-equiv="refresh" content="18">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="國立中正大學電機、通訊系專題成果展。" />
		<meta name="keywords" content="專題成果展, 國立中正大學, 電機工程學系, 通訊工程學系" />
		<meta name="author" content="Power Wu"/>
		<meta property="og:url" content="http://exhibition.ee.ccu.edu.tw/" />
		<meta property="og:title" content="電機通訊專題成果展 - 國立中正大學電機工程學系" />
		<meta property="og:description" content="國立中正大學電機、通訊系專題成果展。" />
		<meta property="og:image" content="http://exhibition.ee.ccu.edu.tw/images/banner.jpg" />
		
		<link rel="stylesheet" href="assets/main/css/main.css" />
		<!--[if lte IE 8]><script src="assets/main/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/main/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/main/css/ie8.css" /><![endif]-->
		<link href="images/banner.jpg" rel="image_src" type="image/jpeg">
	</head>
	<body>

			<div id="page-wrapper">
				
				<header id="header">
					<span class="logo"><a href="index.php">電機／通訊專題成果展</a></span>
					<a href="#menu">選單</a>
				</header>

				<nav id="menu">
					<div class="inner">
						<h2>選單</h2>
						<ul class="links">
							</ul>
						<a class="close"></a>
					</div>
				</nav>

				<section id="main" class="wrapper alt">
				<div class="inner">

						<header class="major special">
							<p>開票結果</p>
							<h1>專題成果展系統</h1>
							<a href="docs/poster_voting.pdf" target="_blank">系統簡介</a>
						</header>

						<div class="row">
							<div class="12u$">
								<div id="chart" class="chart"></div>
							</div>
							<div class="12u$">
								<p></p>
							</div>
						</div>

					</div>
				</section>



				<footer id="footer">
					<div class="inner alt">
					</div>
					<div class="copyright">
						<ul class="actions">
							<li><a href="main.php" class="button special icon fa-home">回首頁</a></li>
						</ul>
						<span>&copy; 國立中正大學 電機工程學系 | 由<a href="http://powerstudio.azurewebsites.net" target="_blank">PowerStudio</a>架設</span>
					</div>
				</footer>
			
			
			</div>


			<script src="assets/main/js/jquery.min.js"></script>			
			<script src="assets/main/js/jquery-migrate-1.2.1.min.js" ></script>
			<script src="assets/main/js/raphael-1.5.2.js"></script>
			<script src="assets/main/js/elycharts.min.js"></script>

			<script src="assets/main/js/skel.min.js"></script>
			<script src="assets/main/js/util.js"></script>
			<script src="assets/main/js/jquery.scrollex.min.js"></script>
			<script src="assets/main/js/jquery.scrolly.min.js"></script>
			<!--[if lte IE 8]><script src="assets/main/js/ie/respond.min.js"></script><![endif]-->

			<script src="assets/main/js/main.js"></script>
			<script src="assets/main/js/voting.js"></script>

	</body>
</html><?php }
}
