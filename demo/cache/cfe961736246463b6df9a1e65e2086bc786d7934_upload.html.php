<?php
/* Smarty version 5.0.0, created on 2024-04-04 13:03:53
  from 'file:upload.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea5395d8875_81191110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe961736246463b6df9a1e65e2086bc786d7934' => 
    array (
      0 => 'upload.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
))) {
function content_660ea5395d8875_81191110 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
?><!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 上傳檔案</title>
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
							<p>上傳檔案</p>
							<h1>專題成果展系統</h1>
						</header>
						<div class="row uniform">
							<div class="12u$">
								<h3></h3>
								<p></p>
								<h4 class="preview_project"></h4>
							</div>

							<div class="6u 12u$(small)">

								<fieldset>
									<h2>海報</h2>
									<p>專題展當日參展海報，檔案大小限制30MB以內，<i class="icon fa-file-pdf-o"></i> pdf格式。</p>
									<form id="form_upload_poster" enctype="multipart/form-data" method="POST">
										<input id="upload_poster" type="file" accept="application/pdf" name="upload_poster" value="">
										<ul class="actions">
											<li><a id="btn_upload_poster" class="button special icon fa-upload">上傳檔案</a></li>
										</ul>	
										<p id="status_poster"></p>					
									</form>		
								</fieldset>


								<!--
								<ul class="actions">
									<li><a id="backToHome" href="main.php" class="button special icon fa-home">回首頁</a></li>
								</ul>		-->									
								

							</div>

							<div class="6u 12u$(small)">
								<h2>預覽</h2>
								<form>
									<p class="preview">－海報－</p>
									<iframe id="preview_poster" width="640" height="880" src="" frameborder="0" scrolling="no">
										<p>您的瀏覽器不支援pdf播放，請更新瀏覽器。</p>
									</iframe>
									<p id="preview_poster_download">由於IE不支援即時預覽，請利用預覽海報確認檔案是否成功上傳。</br><a href="upload///poster.pdf" target="_blank">預覽海報</a></p>
								</form>
							</div>



						</div>


						<div class="modal fade" id="dialog_upload" tabindex="0" role="dialog" aria-labelledby="dialog_uploadLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="dialog_uploadLabel">上傳檔案</h4>
									</div>
									<div class="modal-body">
										<p>您尚未完成上傳檔案作業，可以稍後再回來編輯。</p>
										<p id="lack"></p>
									</div>
									<div class="modal-footer">	
										<ul class="actions">
											<li><button type="button" class="button btn-default" data-dismiss="modal">繼續編輯</button></li>
											<li><a href="main.php" class="button special icon fa-home ">回首頁</a></li>
										</ul>								
										<!--<button type="button" class="button fit btn-default" data-dismiss="modal">繼續編輯</button>
										<a href="main.php" class="button special fit icon fa-home ">回首頁</a>     -->   
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
			<script src="assets/main/js/jquery.form.js"></script>
			<script src="assets/main/js/bootstrap.modal.js"></script>
			<script src="assets/main/js/upload.js"></script>

	</body>
</html><?php }
}
