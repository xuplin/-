<?php
/* Smarty version 5.0.0, created on 2024-03-31 06:12:29
  from 'file:check.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_6608fecde0af74_32289993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fc5354c8242356c7ec90ff0e04a34b5cad267e' => 
    array (
      0 => 'check.html',
      1 => 1711865547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6608fecde0af74_32289993 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '6158864486608fecde03a26_44373886';
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
        <input type="password" name="password"required>
        <button type="submit">Submit</button>
    </form>
</body>
</html><?php }
}
