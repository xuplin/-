<?php
/* Smarty version 5.0.0, created on 2024-04-04 11:24:33
  from 'file:main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660e8df12c0223_88287081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39bf9d4f8d6c1854659593273a6fbc95a6195138' => 
    array (
      0 => 'main.html',
      1 => 1712216369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_660e8df12c0223_88287081 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1055377524660e8df1287d58_62118446';
?>
<!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
<head>
	<title>電機通訊專題成果展 - 國立中正大學電機工程學系</title>
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
<body class="is-loading">

	<div id="page-wrapper">

		<header id="header" class="alt">
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
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ul>
				<a class="close"></a>
			</div>
		</nav>

		<section id="banner">
			<div class="inner">
				<p>電機／通訊專題成果展</p>
				<h1><?php echo $_smarty_tpl->getValue('date');?>
</h1>
				<ul class="actions">
					<li><a href="<?php echo $_smarty_tpl->getValue('btnBannerURL');?>
" class="button big special scrolly"><?php echo $_smarty_tpl->getValue('btnBannerContent');?>
</a></li>
				</ul>
			</div>
		</section>

		<section id="one" class="wrapper style2">
			<div class="inner">
				<section class="spotlights">
					<article>
						<header class="major">
							<p>最新消息</p>
							<h2><?php echo $_smarty_tpl->getValue('news')['title'];?>
</h2>
						</header>
						<p><?php echo $_smarty_tpl->getValue('news')['content'];?>
</p>
						<ul class="actions">
							<li><a href="news.php" class="button">更多資訊</a></li>
						</ul>
					</article>
					<article>
						<header class="major">
							<p>報名須知</p>
							<h2><?php echo $_smarty_tpl->getValue('info')['title'];?>
</h2>
						</header>
						<p><?php echo $_smarty_tpl->getValue('info')['content'];?>
</p>
						<ul class="actions">
							<li><a href="info.php" class="button">更多資訊</a></li>
						</ul>
					</article>
				</section>
			</div>
		</section>

		<section id="two" class="wrapper style1 special">
			<div class="inner">
				<ul class="features">
					<li>
						<span class="icon major <?php echo $_smarty_tpl->getValue('arrFeatures')[0]['icon'];?>
"></span>
						<h4><?php echo $_smarty_tpl->getValue('arrFeatures')[0]['title'];?>
</h4>
						<p><?php echo $_smarty_tpl->getValue('arrFeatures')[0]['content'];?>
</p>
					</li>
					<li>
						<span class="icon major <?php echo $_smarty_tpl->getValue('arrFeatures')[1]['icon'];?>
"></span>
						<h4><?php echo $_smarty_tpl->getValue('arrFeatures')[1]['title'];?>
</h4>
						<p><?php echo $_smarty_tpl->getValue('arrFeatures')[1]['content'];?>
</p>
					</li>
					<li>
						<span class="icon major <?php echo $_smarty_tpl->getValue('arrFeatures')[2]['icon'];?>
"></span>
						<h4><?php echo $_smarty_tpl->getValue('arrFeatures')[2]['title'];?>
</h4>
						<p><?php echo $_smarty_tpl->getValue('arrFeatures')[2]['content'];?>
</p>
					</li>
					<li>
						<span class="icon major <?php echo $_smarty_tpl->getValue('arrFeatures')[3]['icon'];?>
"></span>
						<h4><?php echo $_smarty_tpl->getValue('arrFeatures')[3]['title'];?>
</h4>
						<p><?php echo $_smarty_tpl->getValue('arrFeatures')[3]['content'];?>
</p>
					</li>
				</ul>
			</div>
		</section>

		<section id="three" class="wrapper">
			<div class="inner">
				<header class="major alt">
					<p>成果展示</p>
					<h2>歷年優秀成果</h2>
				</header>
				<section class="posts">
					<article>
						<div class="row uniform">
							<div class="content 4u 12u$(small)">
								<p></br>記錄了從2012年至今，每一屆專題展優秀作品、隊伍與學生。</p>
								<ul class="actions">
									<li><a href="awards.php" class="button special">更多資訊</a></li>
								</ul>
							</div>
							<div class="8u 12u$(small)"><span class="image fit"><img src="images/pic_award.jpg" alt=""></span></div>
						</div>
					</article>
				</section>
			</div>
		</section>

		<section id="four" class="wrapper style2 alt">
			<div class="inner">
				<header class="major">
					<p>專題成果展</p>
					<h2>重要日期</h2>
				</header>
				<section class="timeline">
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrDateInfo'), 'i');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach1DoElse = false;
?>
						<section>
							<header>
								<p><?php echo $_smarty_tpl->getValue('i')['date'];?>
</p>
								<h4><?php echo $_smarty_tpl->getValue('i')['matter'];?>
</h4>
							</header>
							<div class="content">
								<p><?php echo $_smarty_tpl->getValue('i')['content'];?>
</p>
								<?php if ($_smarty_tpl->getValue('i')['link'] != null) {?>
									<ul class="actions">
										<li><a href="<?php echo $_smarty_tpl->getValue('i')['link'];?>
" class="button">詳細資訊</a></li>
									</ul>
								<?php }?>
							</div>
						</section>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</section>
			</div>
		</section>

		<footer id="footer">
			<div class="inner">
				<ul class="contact">
					<li class="icon fa-home">
						<strong>地址</strong>
						<span>621 嘉義縣民雄鄉大學路168號<br>工學院一館</span>
					</li>
					<li class="icon fa-phone">
						<strong>電話</strong>
						<span>(05) 272-0411 # 23201</span>
					</li>
					<li class="icon fa-envelope">
						<strong>Email</strong>
						<a href="mailto:admklc@ccu.edu.tw">admklc@ccu.edu.tw</a>
					</li>
				</ul>					
				<form id="map"></form>
			</div>
			<div class="copyright">
				<span>&copy; 國立中正大學 電機工程學系 | 由<a href="http://powerstudio.azurewebsites.net" target="_blank">PowerStudio</a>架設</span>
			</div>
		</footer>

	</div>

	<?php echo '<script'; ?>
 src="../assets/main/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../assets/main/js/skel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../assets/main/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../assets/main/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../assets/main/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx0oQu6_RZsW8tjTmAOLC2KVQkBs0_7wE"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../assets/main/js/google_map.js"><?php echo '</script'; ?>
>
	<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/main/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
	<?php echo '<script'; ?>
 src="assets/main/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
