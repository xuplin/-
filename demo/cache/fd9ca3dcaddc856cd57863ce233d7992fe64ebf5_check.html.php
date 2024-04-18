<?php
/* Smarty version 5.0.0, created on 2024-04-04 12:55:49
  from 'file:check.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_660ea355f04459_94416979',
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
  'cache_lifetime' => 120,
))) {
function content_660ea355f04459_94416979 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Alan\\wamp64\\www\\demo\\templates';
?><!-- check.html -->
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
