<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:44:20
  from 'file:_announcements.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccbec42d37e5_27005364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fabf1e63e5f74075861fedac385aeb2ea26272c2' => 
    array (
      0 => '_announcements.tpl',
      1 => 1769589438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccbec42d37e5_27005364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('announcements'), 'announcement');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('announcement')->value) {
$foreach20DoElse = false;
?>
  <div class="alert alert-<?php echo $_smarty_tpl->getValue('announcement')['type'];?>
 text-with-list">
    <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
      <button type="button" class="btn-close float-end js_announcment-remover" data-id="<?php echo $_smarty_tpl->getValue('announcement')['announcement_id'];?>
"></button>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('announcement')['title']) {?><div class="title"><?php echo $_smarty_tpl->getValue('announcement')['title'];?>
</div><?php }?>
    <?php echo $_smarty_tpl->getValue('announcement')['code'];?>

  </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
