<?php
/* Smarty version 5.0.0, created on 2024-04-04 12:55:49
  from 'file:check.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea355ecefa7_43109718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9ca3dcaddc856cd57863ce233d7992fe64ebf5' => 
    array (
      0 => 'check.html',
      1 => 1710664857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_660ea355ecefa7_43109718 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1357221177660ea355eaa0e3_57224724';
?>
<!-- check.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Check</title>
</head>
<body>
    <form method="post" action="check.php">
        <label for="password">Enter Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html><?php }
}
