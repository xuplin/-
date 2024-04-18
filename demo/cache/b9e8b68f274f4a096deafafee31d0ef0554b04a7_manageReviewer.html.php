<?php
/* Smarty version 5.0.0, created on 2024-04-10 06:39:47
  from 'file:manageReviewer.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_6616343367dff7_27990046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e8b68f274f4a096deafafee31d0ef0554b04a7' => 
    array (
      0 => 'manageReviewer.html',
      1 => 1712236690,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
))) {
function content_6616343367dff7_27990046 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
?><!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 歷年優秀成果</title>
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
							<header class="major">
								<h1>國立中正大學 2024 電機系、通訊系專題成果展評審委員評分系統</h1>
							</header>

							<div class="table-wrapper">
								<h2>請評審委員輸入競賽組成績及評語<p style="font-size:25px">感謝評審委員給予評分及評語</p></h2>
								
								<table id="tableParticipateCompetition_">
									<thead>
										<tr>
											<th>隊伍名稱</th>
											<th>隊長</th>
											<th>成員</th>
											<th>指導教授</th>
											<th>評分(0~100)</th>
											<th>評語(最多兩百字)</th>
											<th>上傳分數 / 評語</th>
											<th>總平均</th>
										</tr>
									</thead>
									<tbody style="width:100%">
										<tr>
											<td><div class="subtitle">【A組】</div><div class="maintitle">隊伍A</div></td>
											<td>隊長A</td>
											<td>成員A1, 成員A2</td>
											<td>教授A</td>
											<td><input  placeholder="0 - 100" style="width:100px; background-color:#F0F0F0;" maxlength="3" type="text" value=""/></td>
											<td><textarea placeholder="最多 200 字" id="comment" name="comment" style="width:300px; background-color:#F0F0F0;" maxlength="200" rows="5"></textarea></td>
											<td>
												<a href="#" class="button special small">上傳分數</a>
												<p></p>
												<a href="#" class="button special small">上傳評語</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
											<td>85</td>
										</tr>
										<tr>
											<td><div class="subtitle">【B組】</div><div class="maintitle">隊伍B</div></td>
											<td>隊長B</td>
											<td>成員B1, 成員B2</td>
											<td>教授B</td>
											<td><input  placeholder="0 - 100" style="width:100px; background-color:#F0F0F0;" maxlength="3" type="text" value=""/></td>
											<td><textarea placeholder="最多 200 字" id="comment" name="comment" style="width:300px; background-color:#F0F0F0;" maxlength="200" rows="5"></textarea></td>
											<td>
												<a href="#" class="button special small">上傳分數</a>
												<p></p>
												<a href="#" class="button special small">上傳評語</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
											<td>78</td>
										</tr>
										<tr>
											<td><div class="subtitle">【C組】</div><div class="maintitle">隊伍C</div></td>
											<td>隊長C</td>
											<td>成員C1, 成員C2</td>
											<td>教授C</td>
											<td><input  placeholder="0 - 100" style="width:100px; background-color:#F0F0F0;" maxlength="3" type="text" value=""/></td>
											<td><textarea placeholder="最多 200 字" id="comment" name="comment" style="width:300px; background-color:#F0F0F0;" maxlength="200" rows="5"></textarea></td>
											<td>
												<a href="#" class="button special small">上傳分數</a>
												<p></p>
												<a href="#" class="button special small">上傳評語</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
											<td>92</td>
										</tr>
									</tbody>										
									<tfoot>
										<tr>
											<td>總計：<span id="numParticipateCompetition">3</span>組</td>
											<td colspan="4"></td>
										</tr>
									</tfoot>								
								</table>
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
			<script src="assets/main/js/skel.min.js"></script>
			<script src="assets/main/js/util.js"></script>
			<script src="assets/main/js/jquery.scrollex.min.js"></script>
			<script src="assets/main/js/jquery.scrolly.min.js"></script>
			<!--[if lte IE 8]><script src="assets/main/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/main/js/main.js"></script>
			<script src="assets/main/js/manageReviewer.js"></script>


	</body>
</html><?php }
}
