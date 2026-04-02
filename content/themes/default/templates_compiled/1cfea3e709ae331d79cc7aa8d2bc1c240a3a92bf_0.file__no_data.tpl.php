<?php
/* Smarty version 5.7.0, created on 2026-03-31 10:58:02
  from 'file:_no_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69cba8ba84c507_84746588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cfea3e709ae331d79cc7aa8d2bc1c240a3a92bf' => 
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
function content_69cba8ba84c507_84746588 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\default\\templates';
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
