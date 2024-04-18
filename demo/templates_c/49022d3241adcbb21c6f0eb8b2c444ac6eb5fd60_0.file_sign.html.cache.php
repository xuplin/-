<?php
/* Smarty version 5.0.0, created on 2024-04-08 04:03:10
  from 'file:sign.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_66136c7ef36510_84121807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49022d3241adcbb21c6f0eb8b2c444ac6eb5fd60' => 
    array (
      0 => 'sign.html',
      1 => 1712236690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66136c7ef36510_84121807 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '121765782366136c7ef262b6_49596138';
?>
<!DOCTYPE HTML>
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
								<p>報名</p>
								<h1>專題成果展系統</h1>
							</header>

							<h2 <?php echo $_smarty_tpl->getValue('error');?>
><?php echo $_smarty_tpl->getValue('status');?>
</h2>
							<ul class="actions">
								<li><a href="<?php echo $_smarty_tpl->getValue('btnURL');?>
" class="button special icon <?php echo $_smarty_tpl->getValue('btnIcon');?>
"><?php echo $_smarty_tpl->getValue('btnName');?>
</a></li>
							</ul>


						</div>
					</section>

					<footer id="footer">
						<div class="inner alt">
						</div>
						<div class="copyright">
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

	</body>
</html><?php }
}
