<?php
/* Smarty version 5.0.0, created on 2024-04-07 05:40:46
  from 'file:manageUsers.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_661231de38dee6_90287216',
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
  'includes' => 
  array (
  ),
))) {
function content_661231de38dee6_90287216 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1857313365661231de36c2b8_69130323';
?>
<!DOCTYPE HTML>
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
								<p>報名管理</p>
								<h1>專題成果展系統</h1>
							</header>
<?php if ($_smarty_tpl->getValue('numNotVerified') == 0 && $_smarty_tpl->getValue('numVerified') == 0) {?>
							<p>尚無資料。</p>

<?php }
if ($_smarty_tpl->getValue('numNotVerified') != 0) {?>
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
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrNotVerified'), 'i');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach1DoElse = false;
?>
										<tr>
											<td><div class="subtitle">【<?php echo $_smarty_tpl->getValue('i')['group'];?>
】</div><div class="maintitle"><?php echo $_smarty_tpl->getValue('i')['group_name'];?>
</div></td>
											<td><?php echo $_smarty_tpl->getValue('i')['leader'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['members'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['professor'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['needs'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['timeSignup'];?>
</td>
											<td>
												<a href="#" class="button special small">確認報名</a>
												<!--<a href="#" class="button small">刪除</a>-->
											</td>
										</tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</tbody>										
									<tfoot>
										<tr>
											<td>總計：<span id="numNotVerified"><?php echo $_smarty_tpl->getValue('numNotVerified');?>
</span>組</td>
											<td colspan="4"></td>
										</tr>
									</tfoot>								
								</table>
							</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('numVerified') != 0) {?>
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
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrVerified'), 'i');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach2DoElse = false;
?>
										<tr>
											<td><div class="subtitle">【<?php echo $_smarty_tpl->getValue('i')['group'];?>
】</div><div class="maintitle"><?php echo $_smarty_tpl->getValue('i')['group_name'];?>
</div></td>
											<td><?php echo $_smarty_tpl->getValue('i')['leader'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['members'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['professor'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['needs'];?>
</td>
											<td><?php echo $_smarty_tpl->getValue('i')['timeSignup'];?>
</td>
											<!--<td>
												<a href="#" class="button small">刪除</a>
											</td>-->
										</tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</tbody>									
									<tfoot>
										<tr>
											<td>總計：<span id="numVerified"><?php echo $_smarty_tpl->getValue('numVerified');?>
組</span></td>
											<td colspan="4"></td>
										</tr>
									</tfoot>									
								</table>
							</div>
<?php }?>



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
 src="assets/main/js/manage.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
