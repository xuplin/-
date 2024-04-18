<?php
/* Smarty version 5.0.0, created on 2024-04-09 03:24:49
  from 'file:upload.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_6614b501d3e535_35861914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c428fd8f6688cd19fc880227b189e5b791a9893e' => 
    array (
      0 => 'upload.html',
      1 => 1712236690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6614b501d3e535_35861914 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '21114275356614b501d0dfa0_90503735';
?>
<!DOCTYPE HTML>
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
		<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/main/js/ie/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/main/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/main/css/ie8.css" /><![endif]-->
		<link href="images/banner.jpg" rel="image_src" type="image/jpeg">
	</head>
	<body>
		


			<div id="page-wrapper">

				<header id="header">
					<span class="logo"><a href="index.php">電機／通訊專題成果展</a></span>
<?php if ($_smarty_tpl->getValue('user') != '') {?>
					<span class="user"><?php echo $_smarty_tpl->getValue('user');?>
</span>
<?php }?>
					<a href="#menu">選單</a>
				</header>



				<nav id="menu">
					<div class="inner">
						<h2>選單</h2>
						<ul class="links">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrMenu'), 'i');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach0DoElse = false;
?>
							<li><a href="<?php echo $_smarty_tpl->getValue('i')['url'];?>
"><?php echo $_smarty_tpl->getValue('i')['content'];?>
</a></li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>							</ul>
						<a class="close"></a>
					</div>
				</nav>




				<section id="main" class="wrapper alt">
					<div class="inner">
						
						<header class="major special">
							<p><?php if ($_smarty_tpl->getValue('group') != '') {?>【<?php echo $_smarty_tpl->getValue('group');?>
】<?php }?>上傳檔案</p>
							<h1>專題成果展系統</h1>
						</header>
<?php if ($_smarty_tpl->getValue('expire') == "expired") {?>
						<h2>上傳檔案截止！</h2>
						<p>上傳檔案開放時段：</br>競賽組：<?php echo $_smarty_tpl->getValue('start_competition');?>
 至 <?php echo $_smarty_tpl->getValue('expire_competition');?>
</br>一般組：<?php echo $_smarty_tpl->getValue('start_normal');?>
 至 <?php echo $_smarty_tpl->getValue('expire_normal');?>
</p>
						<ul class="actions">
							<li><a href="main.php" class="button special icon fa-home">回首頁</a></li>
						</ul>
<?php } elseif ($_smarty_tpl->getValue('expire') == "not access") {?>
						<h2>現在並非上傳檔案開放時段。</h2>
						<p>上傳檔案開放時段：</br>競賽組：<?php echo $_smarty_tpl->getValue('start_competition');?>
 至 <?php echo $_smarty_tpl->getValue('expire_competition');?>
</br>一般組：<?php echo $_smarty_tpl->getValue('start_normal');?>
 至 <?php echo $_smarty_tpl->getValue('expire_normal');?>
</p>
						<ul class="actions">
							<li><a href="main.php" class="button special icon fa-home">回首頁</a></li>
						</ul>
<?php } else { ?>
						<div class="row uniform">
							<div class="12u$">
								<h3><?php echo $_smarty_tpl->getValue('welcome');?>
</h3>
								<p><?php echo $_smarty_tpl->getValue('explain');?>
</p>
								<h4 class="preview_project"><?php echo $_smarty_tpl->getValue('project');?>
</h4>
							</div>

							<div class="6u 12u$(small)">

<?php if ($_smarty_tpl->getValue('group') == "競賽組") {?>
								<form>
									<h2>摘要</h2>
									<p>專題摘要，字數不超過1000字。</p>
									<textarea id="abstract" name="abstract" rows="10"></textarea>
									<ul class="actions">
										<li><a id="btn_abstract" class="button special icon fa-save disabled" href="#">儲存</a></li>
									</ul>									
								</form>
<?php }?>
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
<?php if ($_smarty_tpl->getValue('group') == "競賽組") {?>
								<form id="video">
									<h2>影片</h2>
									<p>輸入 <i class="icon fa-youtube-play"></i> Youtube影片連結。</p>
									<input id="link_video" type="text" name="link_video">
								</form>

								<fieldset>
									<h2>其它審查資料</h2>
									<p>有利於審查的資料，檔案大小限制100MB以內，<i class="icon fa-file-pdf-o"></i> pdf格式。</p>
									<form id="form_upload_other" enctype="multipart/form-data" method="POST">
										<input id="upload_other" type="file" accept="application/pdf" name="upload_other" value="">
										<ul class="actions">
											<li><a id="btn_upload_other" class="button special icon fa-upload">上傳檔案</a></li>
										</ul>											
										<p id="status_other"></p>
									</form>
								</fieldset>
<?php }?>


								<!--
								<ul class="actions">
									<li><a id="backToHome" href="main.php" class="button special icon fa-home">回首頁</a></li>
								</ul>		-->									
								

							</div>

							<div class="6u 12u$(small)">
								<h2>預覽</h2>
<?php if ($_smarty_tpl->getValue('group') == "競賽組") {?>
								<form>
									<p class="preview">－摘要－</p>
									<textarea id="preview_abstract" rows="10" readonly="readonly"></textarea>
								</form>
<?php }?>
								<form>
									<p class="preview">－海報－</p>
									<iframe id="preview_poster" width="640" height="880" src="" frameborder="0" scrolling="no">
										<p>您的瀏覽器不支援pdf播放，請更新瀏覽器。</p>
									</iframe>
									<p id="preview_poster_download">由於IE不支援即時預覽，請利用預覽海報確認檔案是否成功上傳。</br><a href="upload/<?php echo $_smarty_tpl->getValue('year');?>
/<?php echo $_smarty_tpl->getValue('user');?>
/poster.pdf" target="_blank">預覽海報</a></p>
								</form>
<?php if ($_smarty_tpl->getValue('group') == "競賽組") {?>
								<form>
									<p class="preview">－影片－</p>
									<iframe id="preview_video" width="640" height="360" src="" frameborder="0" allowfullscreen>
										<p>您的瀏覽器不支援youtube播放，請更新瀏覽器。</p>
									</iframe>
								</form>

								<form>
									<p class="preview">－其它資料－</p>
									<iframe id="preview_other" width="640" height="880" src="" frameborder="0" scrolling="no">
										<p>您的瀏覽器不支援pdf播放，請更新瀏覽器。</p>
									</iframe>
									<p id="preview_other_download">由於IE不支援即時預覽，請利用預覽其它資料確認檔案是否成功上傳。</br><a href="upload/<?php echo $_smarty_tpl->getValue('year');?>
/<?php echo $_smarty_tpl->getValue('user');?>
/other.pdf" target="_blank">預覽其它資料</a></p>
								</form>
<?php }
}?>
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


			<?php echo '<script'; ?>
 src="assets/main/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/main/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
			<?php echo '<script'; ?>
 src="assets/main/js/main.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/jquery.form.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/bootstrap.modal.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/upload.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
