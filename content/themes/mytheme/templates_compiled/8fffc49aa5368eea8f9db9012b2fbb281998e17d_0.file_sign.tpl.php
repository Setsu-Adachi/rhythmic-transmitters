<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:25
  from 'file:sign.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0a97a76d4_88456895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fffc49aa5368eea8f9db9012b2fbb281998e17d' => 
    array (
      0 => 'sign.tpl',
      1 => 1769589438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_69ccc0a97a76d4_88456895 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="container mt30">
  <div class="row">
    <div class="col-md-6 col-lg-5 mx-md-auto">
      <!-- sign in/up form -->
      <?php $_smarty_tpl->renderSubTemplate('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <!-- sign in/up form -->
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
