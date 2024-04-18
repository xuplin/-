<?php
/* Smarty version 5.0.0, created on 2024-04-09 02:46:09
  from 'file:vote_check.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_6614abf106ab86_81164650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a25e02f04af4c3b24eacca91b627263a1228d4f' => 
    array (
      0 => 'vote_check.html',
      1 => 1712630313,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
))) {
function content_6614abf106ab86_81164650 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
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
					<span class="user">使用者1</span>
					<a href="#menu">選單</a>
				</header>


				<nav id="menu">
					<div class="inner">
						<h2>選單</h2>
						<ul class="links">
							<li><a href="page1.html">頁面 1</a></li>
							<li><a href="page2.html">頁面 2</a></li>
							<li><a href="page3.html">頁面 3</a></li>
							<li><a href="page4.html">頁面 4</a></li>
							</ul>
						<a class="close"></a>
					</div>
				</nav>

				<section id="main" class="wrapper alt">
                    <div class="inner">
                        <h2>投票系統</h2>
                        <form id="RFID" method="POST" action="/vote_check.php">
                            <input id="RFID" name="RFID" type="text">
                            <ul class="actions">
                                <li><input type="submit" value="確認" class="button special" /></li>
                            </ul>					
                        </form>	
                        <form method="POST" action="/update_vote.php">
                                                        <input type="checkbox" class="defaultCheckbox" name="checkBox1" checked><br>
                                                                <input type="checkbox" id="第一隊" name="第一隊">
                                <label for="第一隊">第一隊</label>
                                </br>                                                                <input type="checkbox" id="第二隊" name="第二隊">
                                <label for="第二隊">第二隊</label>
                                </br>                                                                <input type="checkbox" id="第三隊" name="第三隊">
                                <label for="第三隊">第三隊</label>
                                </br>                                                                <input type="checkbox" id="第四隊" name="第四隊">
                                <label for="第四隊">第四隊</label>
                                </br>                                                                <input type="checkbox" id="第五隊" name="第五隊">
                                <label for="第五隊">第五隊</label>
                                </br>                                                                <ul class="actions">
                                    <li><input type="submit" value="確認" class="button special" /></li>
                                </ul>
                                                    </form>
                            
                        
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
			<!-- <script src="assets/main/js/voting.js"></script> -->

	</body>
</html><?php }
}
