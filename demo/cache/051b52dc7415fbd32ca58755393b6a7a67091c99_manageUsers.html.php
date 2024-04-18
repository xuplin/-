<?php
/* Smarty version 5.0.0, created on 2024-04-10 06:07:40
  from 'file:manageUsers.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_66162cacecf165_71792988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051b52dc7415fbd32ca58755393b6a7a67091c99' => 
    array (
      0 => 'manageUsers.html',
      1 => 1712236690,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
))) {
function content_66162cacecf165_71792988 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
?><!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 報名管理</title>
		<meta charset="utf-8" />
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

							<header class="major special">
								<p>報名管理</p>
								<h1>專題成果展系統</h1>
							</header>
							<div class="table-wrapper">
								<h2>尚未審核</h2>
								<table id="tableNotVerified">
									<thead>
										<tr>
											<th>隊伍名稱</th>
											<th>隊長</th>
											<th>成員</th>
											<th>指導教授</th>
											<th>需求</th>
											<th>報名時間</th>
											<th>審核管理</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><div class="subtitle">【A組】</div><div class="maintitle">未審核隊伍1</div></td>
											<td>隊長1</td>
											<td>成員1, 成員2</td>
											<td>教授1</td>
											<td>需求1</td>
											<td>2024-04-06 10:00:00</td>
											<td>
												<a href="#" class="button special small">確認報名</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
										</tr>
										<tr>
											<td><div class="subtitle">【B組】</div><div class="maintitle">未審核隊伍2</div></td>
											<td>隊長2</td>
											<td>成員3, 成員4</td>
											<td>教授2</td>
											<td>需求2</td>
											<td>2024-04-07 11:00:00</td>
											<td>
												<a href="#" class="button special small">確認報名</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
										</tr>
										<tr>
											<td><div class="subtitle">【C組】</div><div class="maintitle">未審核隊伍3</div></td>
											<td>隊長3</td>
											<td>成員5, 成員6</td>
											<td>教授3</td>
											<td>需求3</td>
											<td>2024-04-08 12:00:00</td>
											<td>
												<a href="#" class="button special small">確認報名</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
										</tr>
									</tbody>										
									<tfoot>
										<tr>
											<td>總計：<span id="numNotVerified">3</span>組</td>
											<td colspan="4"></td>
										</tr>
									</tfoot>								
								</table>
							</div>

							<div class="table-wrapper">
								<h2>審核完畢</h2>
								<table id="tableVerified">
									<thead>
										<tr>
											<th>隊伍名稱</a></th>
											<th>隊長</th>
											<th>成員</th>
											<th>指導教授</th>
											<th>需求</th>
											<th>報名時間</th>
											<!--<th>審核管理</th>-->
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><div class="subtitle">【A組】</div><div class="maintitle">審核隊伍1</div></td>
											<td>隊長1</td>
											<td>成員1, 成員2</td>
											<td>教授1</td>
											<td>需求1</td>
											<td>2024-04-06 10:00:00</td>
											<!--<td>
												<a href="#" class="button small">刪除</a>
											</td>-->
										</tr>
										<tr>
											<td><div class="subtitle">【B組】</div><div class="maintitle">審核隊伍2</div></td>
											<td>隊長2</td>
											<td>成員3, 成員4</td>
											<td>教授2</td>
											<td>需求2</td>
											<td>2024-04-07 11:00:00</td>
											<!--<td>
												<a href="#" class="button small">刪除</a>
											</td>-->
										</tr>
										<tr>
											<td><div class="subtitle">【C組】</div><div class="maintitle">審核隊伍3</div></td>
											<td>隊長3</td>
											<td>成員5, 成員6</td>
											<td>教授3</td>
											<td>需求3</td>
											<td>2024-04-08 12:00:00</td>
											<!--<td>
												<a href="#" class="button small">刪除</a>
											</td>-->
										</tr>
									</tbody>									
									<tfoot>
										<tr>
											<td>總計：<span id="numVerified">3組</span></td>
											<td colspan="4"></td>
										</tr>
									</tfoot>									
								</table>
							</div>



						</div>
					</section>

					<footer id="footer">
						<div class="inner alt">
						</div>
						<div class="copyright">
							<ul class="actions">
								<li><a id="backToHome" href="main.php" class="button special icon fa-home">回首頁</a></li>
							</ul>
							<span>&copy; 國立中正大學 電機工程學系 | 由<a href="http://powerstudio.azurewebsites.net" target="_blank">PowerStudio</a>架設</span>
						</div>
					</footer>
			
			

			</div>


			<script src="assets/main/js/jquery.min.js"></script>
			<script src="assets/main/js/skel.min.js"></script>
			<script src="assets/main/js/util.js"></script>
			<script src="assets/main/js/jquery.scrollex.min.js"></script>
			<script src="assets/main/js/jquery.scrolly.min.js"></script>
			<!--[if lte IE 8]><script src="assets/main/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/main/js/main.js"></script>
			<script src="assets/main/js/manage.js"></script>

	</body>
</html><?php }
}
