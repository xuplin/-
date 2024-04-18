<?php
/* Smarty version 5.0.0, created on 2024-04-04 13:03:33
  from 'file:signup_info.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea52510a4f3_81062683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd451e6c0266dfec9f028ebb5d6ddbd4550d7b1' => 
    array (
      0 => 'signup_info.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
))) {
function content_660ea52510a4f3_81062683 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
?><!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 報名</title>
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
		<link rel="stylesheet" href="assets/main/css/bootstrap.modal.css" />
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
								<p>報名</p>
								<h1>專題成果展系統</h1>
							</header>


							<form method="post" action="#" id="info">
								<div class="row uniform">
									<div class="10u 12u$(small)">
										<h3>報名須知</h3>
										<textarea readonly="readonly" rows="12" id="textareaInfo"></textarea></br>	
										<ul class="actions">
											<li><input type="submit" value="我明白了" class="button special disabled" id="understood"/></li>
										</ul>
									</div>
								</div>
							</form>



							<div id="question">
								<form method="post" action="signup.php" id="answer">
									<div class="row uniform">
										<div class="12u$">
											<h3 id="question_num"></h3>
											<h3></h3>
										</div>					
										<div class="4u 12u$(small)">
											<div class="select-wrapper">
												<select id="answer-month">
													<option value="1">1月</option>
													<option value="2">2月</option>
													<option value="3">3月</option>
													<option value="4">4月</option>
													<option value="5">5月</option>
													<option value="6">6月</option>
													<option value="7">7月</option>
													<option value="8">8月</option>
													<option value="9">9月</option>
													<option value="10">10月</option>
													<option value="11">11月</option>
													<option value="12">12月</option>
												</select>
											</div>
										</div>								
										<div class="4u 12u$(small)">
											<div class="select-wrapper">
												<select id="answer-day">
													<option value="1">1日</option>
													<option value="2">2日</option>
													<option value="3">3日</option>
													<option value="4">4日</option>
													<option value="5">5日</option>
													<option value="6">6日</option>
													<option value="7">7日</option>
													<option value="8">8日</option>
													<option value="9">9日</option>
													<option value="10">10日</option>
													<option value="11">11日</option>
													<option value="12">12日</option>
													<option value="13">13日</option>
													<option value="14">14日</option>
													<option value="15">15日</option>
													<option value="16">16日</option>
													<option value="17">17日</option>
													<option value="18">18日</option>
													<option value="19">19日</option>
													<option value="20">20日</option>
													<option value="21">21日</option>
													<option value="22">22日</option>
													<option value="23">23日</option>
													<option value="24">24日</option>
													<option value="25">25日</option>
													<option value="26">26日</option>
													<option value="27">27日</option>
													<option value="28">28日</option>
													<option value="29">29日</option>
													<option value="30">30日</option>
													<option value="31">31日</option>
												</select>
											</div>
										</div>						
										<div class="12u">	
											<ul class="actions">												
												<li><input type="submit" value="確定" class="button special" name="answer" /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>




							<div class="modal fade" id="dialog_attention" tabindex="0" role="dialog" aria-labelledby="dialog_attentionLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="dialog_attentionLabel">報名須知</h4>
										</div>
										<div class="modal-body">
											<p>你真的明白了嗎？</p>
										</div>
										<div class="modal-footer">
											<ul class="actions">
												<li><a href="main.php" class="button special icon fa-refresh">重新報名</a></li>
											</ul>	
										</div>
									</div>
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
			<script src="assets/main/js/skel.min.js"></script>
			<script src="assets/main/js/util.js"></script>
			<script src="assets/main/js/jquery.scrollex.min.js"></script>
			<script src="assets/main/js/jquery.scrolly.min.js"></script>
			<!--[if lte IE 8]><script src="assets/main/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/main/js/main.js"></script>
			<script src="assets/main/js/signup_info.js"></script>
			<script src="assets/main/js/bootstrap.modal.js"></script>
			

	</body>
</html><?php }
}
