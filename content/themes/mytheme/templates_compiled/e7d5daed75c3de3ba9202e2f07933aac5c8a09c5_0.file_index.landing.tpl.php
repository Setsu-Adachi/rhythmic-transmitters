<?php
/* Smarty version 5.7.0, created on 2026-04-01 07:20:54
  from 'file:index.landing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc756b628e6_70038392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d5daed75c3de3ba9202e2f07933aac5c8a09c5' => 
    array (
      0 => 'index.landing.tpl',
      1 => 1775028051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:partials/sidenav.tpl' => 1,
    'file:sections/hero.tpl' => 1,
    'file:sections/cosmos.tpl' => 1,
    'file:sections/about.tpl' => 1,
    'file:sections/process.tpl' => 1,
    'file:sections/gallery.tpl' => 1,
    'file:sections/collaborators.tpl' => 1,
    'file:sections/footer.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_69ccc756b628e6_70038392 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="rainbow-bar top"></div>



<?php $_smarty_tpl->renderSubTemplate("file:partials/sidenav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/cosmos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/process.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/collaborators.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="rainbow-bar bottom"></div>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/css/mythemestyle.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/js/mythememain.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
