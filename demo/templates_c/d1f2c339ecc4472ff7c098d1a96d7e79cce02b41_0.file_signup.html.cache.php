<?php
/* Smarty version 5.0.0, created on 2024-04-08 05:05:34
  from 'file:signup.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_66137b1e010bf8_23370839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f2c339ecc4472ff7c098d1a96d7e79cce02b41' => 
    array (
      0 => 'signup.html',
      1 => 1712236690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66137b1e010bf8_23370839 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '181046154666137b1df37ed1_07399839';
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

<?php if ($_smarty_tpl->getValue('expire') == "expired") {?>
							<h2>報名截止！</h2>
							<ul class="actions">
								<li><a href="main.php" class="button special icon fa-home">回首頁</a></li>
							</ul>
<?php } else { ?>		
							<form id="signUp" method="post" action="sign.php">
								<div class="row uniform">
									<div class="4u 10u$(medium) 12u$(xsmall)">
										<h4>報名隊伍</h4>
										<input type="text" name="group-name" id="group-name" value="" placeholder="隊伍名稱(不可有特殊字元)" /></br>
										<input type="password" name="password" id="password" value="" placeholder="密碼(16位英數字為限)" /></br>
										<input type="password" name="password-re" id="password-re" value="" placeholder="確認密碼" /></br>	
										<textarea name="project" id="project" value="" placeholder="專題名稱" rows="3" /></textarea></br>	
										<input type="text" name="professor" id="professor" value="" placeholder="指導教授" /></br>										
										<div class="select-wrapper">
											<select name="project-institute" id="project-institute">
												<option value="">- 專題組別 -</option>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('departGroup'), 'i');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('i')->value) {
$foreach1DoElse = false;
?>
												<option value="<?php echo $_smarty_tpl->getValue('i')['id'];?>
"><?php echo $_smarty_tpl->getValue('i')['name'];?>
</option>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
											</select>
										</div>											
									</div>
									<div class="8u 10u$(medium) 12u$(xsmall)">
										<div class="row">
											<div id="leader" class="4u 12u$(medium) 12u$(xsmall)">	
												<h4>隊長</h4>
												<input type="text" name="leader-name" id="leader-name" value="" placeholder="隊長名字" /></br>
												<input type="text" name="leader-id" id="leader-id" value="" placeholder="隊長學號" /></br>		
												<input type="email" name="leader-email" id="leader-email" value="" placeholder="隊長e-mail" /></br>	
												<input type="text" name="leader-phone" id="leader-phone" value="" placeholder="隊長聯絡電話" /></br>										
												<div class="select-wrapper">
													<select name="leader-depart" id="leader-depart">
														<option value="">- 系別 -</option>
														<option value="電機系">電機系</option>
														<option value="通訊系">通訊系</option>
													</select>
												</div></br>	
											</div>
											<div id="memberOne" class="4u 12u$(medium) 12u$(xsmall)">	
												<h4>成員一</h4>
												<input type="text" name="memberOne-name" id="memberOne-name" value="" placeholder="名字" /></br>
												<input type="text" name="memberOne-id" id="memberOne-id" value="" placeholder="學號" /></br>	
												<input type="email" name="memberOne-email" id="memberOne-email" value="" placeholder="e-mail" /></br>	
												<input type="text" name="memberOne-phone" id="memberOne-phone" value="" placeholder="聯絡電話" /></br>											
												<div class="select-wrapper">
													<select name="memberOne-depart" id="memberOne-depart">
														<option value="">- 系別 -</option>
														<option value="電機系">電機系</option>
														<option value="通訊系">通訊系</option>
													</select>
												</div></br>	
											</div>		
											<div id="memberTwo" class="4u 12u$(medium) 12u$(xsmall)">	
												<h4>成員二</h4>
												<input type="text" name="memberTwo-name" id="memberTwo-name" value="" placeholder="名字" /></br>
												<input type="text" name="memberTwo-id" id="memberTwo-id" value="" placeholder="學號" /></br>	
												<input type="email" name="memberTwo-email" id="memberTwo-email" value="" placeholder="e-mail" /></br>	
												<input type="text" name="memberTwo-phone" id="memberTwo-phone" value="" placeholder="聯絡電話" /></br>
												<div class="select-wrapper">
													<select name="memberTwo-depart" id="memberTwo-depart">
														<option value="">- 系別 -</option>
														<option value="電機系">電機系</option>
														<option value="通訊系">通訊系</option>
													</select>
												</div></br>	
											</div>		
										</div>
										<div class="row">
											<div id="memberThree" class="4u 12u$(medium) 12u$(xsmall)">	
												<h4>成員三</h4>
												<input type="text" name="memberThree-name" id="memberThree-name" value="" placeholder="名字" /></br>
												<input type="text" name="memberThree-id" id="memberThree-id" value="" placeholder="學號" /></br>	
												<input type="email" name="memberThree-email" id="memberThree-email" value="" placeholder="e-mail" /></br>	
												<input type="text" name="memberThree-phone" id="memberThree-phone" value="" placeholder="聯絡電話" /></br>											
												<div class="select-wrapper">
													<select name="memberThree-depart" id="memberThree-depart">
														<option value="">- 系別 -</option>
														<option value="電機系">電機系</option>
														<option value="通訊系">通訊系</option>
													</select>
												</div></br>	
											</div>
											<div id="memberFour" class="4u 12u$(medium) 12u$(xsmall)">	
												<h4>成員四</h4>
												<input type="text" name="memberFour-name" id="memberFour-name" value="" placeholder="名字" /></br>
												<input type="text" name="memberFour-id" id="memberFour-id" value="" placeholder="學號" /></br>	
												<input type="email" name="memberFour-email" id="memberFour-email" value="" placeholder="e-mail" /></br>	
												<input type="text" name="memberFour-phone" id="memberFour-phone" value="" placeholder="聯絡電話" /></br>											
												<div class="select-wrapper">
													<select name="memberFour-depart" id="memberFour-depart">
														<option value="">- 系別 -</option>
														<option value="電機系">電機系</option>
														<option value="通訊系">通訊系</option>
													</select>
												</div></br>	
											</div>
											<div id="memberFive" class="4u 12u$(medium) 12u$(xsmall)">	
												<h4>成員五</h4>
												<input type="text" name="memberFive-name" id="memberFive-name" value="" placeholder="名字" /></br>
												<input type="text" name="memberFive-id" id="memberFive-id" value="" placeholder="學號" /></br>	
												<input type="email" name="memberFive-email" id="memberFive-email" value="" placeholder="e-mail" /></br>	
												<input type="text" name="memberFive-phone" id="memberFive-phone" value="" placeholder="聯絡電話" /></br>											
												<div class="select-wrapper">
													<select name="memberFive-depart" id="memberFive-depart">
														<option value="">- 系別 -</option>
														<option value="電機系">電機系</option>
														<option value="通訊系">通訊系</option>
													</select>
												</div></br>	
											</div>
										</div>
									</div>

								
									<div class="12u">

										<div class="row">										
											<div class="6u 10u$(medium) 12u$(small)">
												<!-- Need -->
												<span>需求：</span></br>
												<input type="radio" id="group-need-poster" name="group-need" value="0" checked>
												<label for="group-need-poster">無</label>
												<input type="radio" id="group-need-table" name="group-need" value="1">
												<label for="group-need-table">桌子</label>
												<input type="radio" id="group-need-powersupply" name="group-need" value="2">
												<label for="group-need-powersupply">桌子和電源</label>
												<!-- Competition -->
												<input type="checkbox" id="competition" name="competition" value="參賽" <?php echo $_smarty_tpl->getValue('enableCompetition');?>
>
												<label for="competition">參加校外評選競賽（需教授推薦）</label>
											</div>
										</div>
										<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->getValue('siteKey');?>
" data-callback="<?php echo $_smarty_tpl->getValue('callback');?>
" data-expired-callback="<?php echo $_smarty_tpl->getValue('expired_callback');?>
"></div></br>
										<ul class="actions">
											<li><input type="submit" value="報名" class="button special disabled" id="btnSignUp"/></li>
											<li><input type="reset" value="重新輸入" class="alt" id="btnReset" /></li>
											<li class="checkStatus" id="errorMessage"></li>
										</ul>
									</div>
								</div>
							</form>

						</div>
<?php }?>

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
			<?php echo '<script'; ?>
 src="assets/main/js/signup.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js?h1=zh-TW'><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
