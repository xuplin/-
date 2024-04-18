<?php
/* Smarty version 5.0.0, created on 2024-03-31 06:59:51
  from 'file:awards.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660909e7c7b8f5_88036335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a1635dc3863b65e540b19afa52ae130fca2b3d' => 
    array (
      0 => 'awards.html',
      1 => 1711017310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_660909e7c7b8f5_88036335 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1315753352660909e7c45ce4_69022099';
?>
<!DOCTYPE HTML>
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
		
		<link rel="stylesheet" href="assets/main/css/bootstrap.min.css" />
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




					<section id="main" class="wrapper alt">
						<div class="inner">
							<header class="major">
								<p>歷年優秀成果</p>
								<h1 id="awardTitle"><?php echo $_smarty_tpl->getValue('MaxYear');?>
年</h1>
							</header>

<?php
$_smarty_tpl->assign('year', null);$_smarty_tpl->tpl_vars['year']->step = 1;$_smarty_tpl->tpl_vars['year']->total = (int) ceil(($_smarty_tpl->tpl_vars['year']->step > 0 ? $_smarty_tpl->getValue('MaxYear')+1 - ($_smarty_tpl->getValue('MinYear')) : $_smarty_tpl->getValue('MinYear')-($_smarty_tpl->getValue('MaxYear'))+1)/abs($_smarty_tpl->tpl_vars['year']->step));
if ($_smarty_tpl->tpl_vars['year']->total > 0) {
for ($_smarty_tpl->tpl_vars['year']->value = $_smarty_tpl->getValue('MinYear'), $_smarty_tpl->tpl_vars['year']->iteration = 1;$_smarty_tpl->tpl_vars['year']->iteration <= $_smarty_tpl->tpl_vars['year']->total;$_smarty_tpl->tpl_vars['year']->value += $_smarty_tpl->tpl_vars['year']->step, $_smarty_tpl->tpl_vars['year']->iteration++) {
$_smarty_tpl->tpl_vars['year']->first = $_smarty_tpl->tpl_vars['year']->iteration === 1;$_smarty_tpl->tpl_vars['year']->last = $_smarty_tpl->tpl_vars['year']->iteration === $_smarty_tpl->tpl_vars['year']->total;?>
							<div class="table-wrapper award" id="<?php echo $_smarty_tpl->getValue('year');?>
">
								<table>
									<thead>
										<tr>
											<th><div class="maintitle">隊伍名稱</div><div class="subtitle">專題名稱</div></th>
											<th>學生</th>
											<th>指導教授</th>
											<th>獎項</th>
										</tr>
									</thead>
									<tbody>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')[$_smarty_tpl->getValue('year')], 'g');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach1DoElse = false;
?>
										<tr class="enter" data-href="./awards_info.php?teamName=<?php echo $_smarty_tpl->getValue('g')['name'];?>
&year=<?php echo $_smarty_tpl->getValue('year');?>
">
											<td><div class="maintitle"><?php echo $_smarty_tpl->getValue('g')['name'];?>
</div><div class="subtitle"><?php echo $_smarty_tpl->getValue('g')['project'];?>
</div></td>
											<td><?php echo $_smarty_tpl->getValue('g')['student'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('g')['professor'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('g')['prize'];?>
</td>
										</tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>							</tbody>
									<tfoot>
										<tr>
											<td></td>
										</tr>
									</tfoot>
								</table>
							</div>
<?php }
}
?>

							<ul class="actions">
								<li><a href="#" class="button icon fa-arrow-left" id="btnPrev"><?php echo $_smarty_tpl->getValue('MaxYear')+1;?>
年</a></li>
								<li><a href="#" class="button icon fa-arrow-right" id="btnNext"><?php echo $_smarty_tpl->getValue('MaxYear')-1;?>
年</a></li>
							</ul>

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
 src="assets/main/js/awards.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/popper.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/main/js/bootstrap.min.js"><?php echo '</script'; ?>
>


	</body>
</html><?php }
}
