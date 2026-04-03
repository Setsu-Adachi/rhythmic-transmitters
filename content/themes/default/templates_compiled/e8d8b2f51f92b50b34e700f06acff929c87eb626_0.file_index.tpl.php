<?php
/* Smarty version 5.7.0, created on 2026-03-31 10:57:40
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69cba8a46f0255_53479956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d8b2f51f92b50b34e700f06acff929c87eb626' => 
    array (
      0 => 'index.tpl',
      1 => 1769589438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
))) {
function content_69cba8a46f0255_53479956 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\default\\templates';
if (!$_smarty_tpl->getValue('user')->_logged_in && !$_smarty_tpl->getValue('system')['newsfeed_public']) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
  <?php $_smarty_tpl->renderSubTemplate('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
