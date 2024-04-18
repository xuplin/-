<?php
/* Smarty version 5.0.0, created on 2024-04-04 12:55:11
  from 'file:awards_info.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea32fb83d68_03929332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22076aa2f638db284806860f490b2233703ddff2' => 
    array (
      0 => 'awards_info.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_660ea32fb83d68_03929332 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '580170905660ea32fb5dea3_05673576';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>電機通訊專題成果展 - 歷年成果詳細資訊</title>
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
                <span class="logo"><input type ="button" onclick="history.back()" value="<" style="color: white !important;"></input></span>
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
                    <p>歷年成果詳細資訊</p>
                    <h1 id="teamName">隊伍名稱:<?php echo $_smarty_tpl->getValue('teamName');?>
</h1>
                </header>
                <div class="center">
                    <embed src="<?php echo $_smarty_tpl->getValue('url');?>
" type='application/pdf' style="align-items: center;width:70vw;height:105vw;">
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
