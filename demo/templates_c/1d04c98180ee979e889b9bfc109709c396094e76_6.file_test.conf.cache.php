<?php /* Smarty version 5.0.0, created on 2024-03-31 04:56:24
         compiled from 'file:test.conf' */ ?>
<?php
/* Smarty version 5.0.0, created on 2024-03-31 04:56:24
  from 'file:test.conf' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.0',
  'unifunc' => 'content_6608ecf8995431_07129974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d04c98180ee979e889b9bfc109709c396094e76' => 
    array (
      0 => 'test.conf',
      1 => 1711366139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6608ecf8995431_07129974 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\demo\\configs';
$_smarty_tpl->parent->assignConfigVars(array (
  'sections' => 
  array (
    'setup' => 
    array (
      'vars' => 
      array (
        'bold' => true,
      ),
    ),
  ),
  'vars' => 
  array (
    'title' => 'Welcome to Smarty!',
    'cutoff_size' => 40,
  ),
), $_smarty_tpl->getValue("sections"));
}
}
