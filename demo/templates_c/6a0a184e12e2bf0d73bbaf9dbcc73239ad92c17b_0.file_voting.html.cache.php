<?php
/* Smarty version 5.0.0, created on 2024-04-04 13:04:42
  from 'file:voting.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea56a280a73_94676013',
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
  'includes' => 
  array (
  ),
))) {
function content_660ea56a280a73_94676013 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1347111997660ea56a254ae1_85441846';
?>
<!DOCTYPE HTML>
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
<?php if ($_smarty_tpl->getValue('user') != null) {?>
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
							<p>開票結果</p>
							<h1>專題成果展系統</h1>
							<a href="docs/poster_voting.pdf" target="_blank">系統簡介</a>
						</header>

						<div class="row">
							<div class="12u$">
								<div id="chart" class="chart"></div>
							</div>
							<div class="12u$">
								<p><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vote'), 'i', false, NULL, 'votes', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach1DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_votes']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_votes']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_votes']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_votes']->value['total'];
?><span class="group_vote"><?php echo $_smarty_tpl->getValue('i')['group'];?>
</span>(<span class="votes"><?php echo $_smarty_tpl->getValue('i')['count'];?>
</span>)<?php if (($_smarty_tpl->getValue('__smarty_foreach_votes')['last'] ?? null)) {
} else { ?>、<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></p>
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


			<?php echo '<script'; ?>
 src="assets/main/js/jquery.min.js"><?php echo '</script'; ?>
>			
			<?php echo '<script'; ?>
 src="assets/main/js/jquery-migrate-1.2.1.min.js" ><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/raphael-1.5.2.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/elycharts.min.js"><?php echo '</script'; ?>
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
 src="assets/main/js/voting.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
