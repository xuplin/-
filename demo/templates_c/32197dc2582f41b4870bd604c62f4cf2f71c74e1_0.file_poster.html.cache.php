<?php
/* Smarty version 5.0.0, created on 2024-04-04 13:00:38
  from 'file:poster.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea4763af9b3_94648015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32197dc2582f41b4870bd604c62f4cf2f71c74e1' => 
    array (
      0 => 'poster.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_660ea4763af9b3_94648015 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1151519824660ea4763893d5_80774963';
?>
<!DOCTYPE HTML>
<!--
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>電機通訊專題成果展 - 成果展示</title>
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



					<img id="loading">
					<section id="main" class="wrapper alt">	
						<div class="inner">
							<header class="major special">
								<p>成果展示</p>
								<h1><?php echo $_smarty_tpl->getValue('year');?>
專題成果展系統</h1>
							</header>


							<div class="row">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('departGroup'), 'i');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach1DoElse = false;
?>
								<div class="3u 6u(medium) 12u(small)">
									<h3 class="depart title"><a id="btn_depart_group_<?php echo $_smarty_tpl->getValue('i')['id'];?>
" href="#"><?php echo $_smarty_tpl->getValue('i')['name'];?>
</a><span class="badge"><?php echo $_smarty_tpl->getValue('i')['count'];?>
</span></h3>
								</div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
							</div>


							<div class="poster main">
<?php
$_smarty_tpl->assign('index', null);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 8+1 - (1) : 1-(8)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
								<div id="depart_group_<?php echo $_smarty_tpl->getValue('index');?>
" class="row poster">	
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')[$_smarty_tpl->getValue('index')-1], 'g');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach2DoElse = false;
?>								
									<div class="4u 6u(medium) 12u$(small)">	
										<div class="div poster">					
											<div class="box">
												<h3><?php echo $_smarty_tpl->getValue('g')['name'];?>
</h3>
												<img class="img-poster" src="upload/<?php echo $_smarty_tpl->getValue('year');?>
/<?php echo $_smarty_tpl->getValue('g')['name'];?>
/poster.jpg" width="100%">
												<p class="poster project"><?php echo $_smarty_tpl->getValue('g')['project'];?>
</p>
												<p class="poster member">指導教授：<?php echo $_smarty_tpl->getValue('g')['professor'];?>
</br>隊長：<?php echo $_smarty_tpl->getValue('g')['leader'];
if ($_smarty_tpl->getValue('g')['students'] != '') {?></br>成員：<?php echo $_smarty_tpl->getValue('g')['students'];
}?></p>
												<ul class="actions">
													<li><a class="button special icon fa-file-pdf-o" href="upload/<?php echo $_smarty_tpl->getValue('year');?>
/<?php echo $_smarty_tpl->getValue('g')['name'];?>
/poster.pdf" target="_blank">海報</a></li>
												</ul>
											</div>	
										</div>
									</div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>					
								</div>
<?php }
}
?>
							</div>
						</div>
					</section>
=
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
 src="assets/main/js/posters.js"><?php echo '</script'; ?>
>




	</body>
</html><?php }
}
