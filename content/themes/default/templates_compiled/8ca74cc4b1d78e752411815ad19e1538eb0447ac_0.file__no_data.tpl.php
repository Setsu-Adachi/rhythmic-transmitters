<?php
/* Smarty version 5.7.0, created on 2026-03-25 05:21:18
  from 'file:_no_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69c370ce772f29_73042846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca74cc4b1d78e752411815ad19e1538eb0447ac' => 
    array (
      0 => '_no_data.tpl',
      1 => 1769589438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_69c370ce772f29_73042846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/whatsonworld/public_html/content/themes/default/templates';
?><!-- no data -->
<div class="text-center text-muted mb20">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), (int) 0, $_smarty_current_dir);
?>
  <div class="text-md">
    <span class="no-data"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
