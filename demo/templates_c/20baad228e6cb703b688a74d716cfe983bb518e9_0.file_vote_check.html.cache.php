<?php
/* Smarty version 5.0.0, created on 2024-04-04 13:04:19
  from 'file:vote_check.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea5538e4721_13659064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20baad228e6cb703b688a74d716cfe983bb518e9' => 
    array (
      0 => 'vote_check.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_660ea5538e4721_13659064 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '940418606660ea5538b3913_38754190';
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
                        <h2>投票系統</h2>
                        <form id="RFID" method="POST" action="/vote_check.php">
                            <input id="RFID" name="RFID" type="text">
                            <ul class="actions">
                                <li><input type="submit" value="確認" class="button special" /></li>
                            </ul>					
                        </form>	
                        <form method="POST" action="/update_vote.php">
                            <?php if ($_smarty_tpl->getValue('test') == 1) {?>
                            <input type="checkbox" class="defaultCheckbox" name="checkBox1" checked>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group'), 'i', false, NULL, 'groups', array (
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach1DoElse = false;
?>
                                <input type="checkbox" id="<?php echo $_smarty_tpl->getValue('i')['group'];?>
" name="<?php echo $_smarty_tpl->getValue('i')['group'];?>
">
                                <label for="<?php echo $_smarty_tpl->getValue('i')['group'];?>
"><?php echo $_smarty_tpl->getValue('i')['group'];?>
</label>
                                <?php if (($_smarty_tpl->getValue('__smarty_foreach_votes')['last'] ?? null)) {
} else { ?></br><?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <ul class="actions">
                                    <li><input type="submit" value="確認" class="button special" /></li>
                                </ul>
                            <?php }?>
                        </form>
                            <?php echo $_smarty_tpl->getValue('test1');?>

                        
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
			<!-- <?php echo '<script'; ?>
 src="assets/main/js/voting.js"><?php echo '</script'; ?>
> -->

	</body>
</html><?php }
}
