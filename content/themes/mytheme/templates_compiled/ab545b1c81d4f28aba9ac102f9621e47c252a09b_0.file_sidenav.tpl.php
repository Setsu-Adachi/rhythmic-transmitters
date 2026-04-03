<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:47
  from 'file:partials/sidenav.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0bf69b670_04431946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab545b1c81d4f28aba9ac102f9621e47c252a09b' => 
    array (
      0 => 'partials/sidenav.tpl',
      1 => 1774584878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc0bf69b670_04431946 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\partials';
?><nav class="sidenav" id="sidenav">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('nav_items'), 'item', false, 'index');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
    <a href="<?php echo $_smarty_tpl->getValue('item')['anchor'];?>
" class="sidenav__dot <?php if ($_smarty_tpl->getValue('index') === 0) {?>active<?php }?>" data-label="<?php echo $_smarty_tpl->getValue('item')['label'];?>
" title="<?php echo $_smarty_tpl->getValue('item')['label'];?>
">
        <span class="sidenav__dot-inner" style="--symbol-color: <?php echo $_smarty_tpl->getValue('item')['color'];?>
;">
            <span class="sidenav__symbol sidenav__symbol--<?php echo $_smarty_tpl->getValue('item')['symbol'];?>
"></span>
        </span>
        <span class="sidenav__label"><?php echo $_smarty_tpl->getValue('item')['label'];?>
</span>
    </a>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</nav>
<?php }
}
