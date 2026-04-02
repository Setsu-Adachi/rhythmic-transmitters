<?php
/* Smarty version 5.7.0, created on 2026-03-31 10:57:40
  from 'file:_ads.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69cba8a47929d8_15033593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9faea476db837814f626a63d894d988676c30646' => 
    array (
      0 => '_ads.tpl',
      1 => 1769589438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69cba8a47929d8_15033593 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\default\\templates';
if ($_smarty_tpl->getValue('_master')) {?>

  <?php if ($_smarty_tpl->getValue('_ads') && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("static","settings","admin"))) {?>
    <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mtb20">
      <!-- ads -->
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_ads'), 'ads_unit');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach0DoElse = false;
?>
        <div class="card">
          <div class="card-header bg-transparent">
            <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

          </div>
          <div class="card-body"><?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>
</div>
        </div>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <!-- ads -->
    </div>
  <?php }?>

<?php } else { ?>

  <?php if ($_smarty_tpl->getValue('ads')) {?>
    <!-- ads -->
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads'), 'ads_unit');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach1DoElse = false;
?>
      <div class="card">
        <div class="card-header bg-transparent">
          <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

        </div>
        <div class="card-body"><?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>
</div>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <!-- ads -->
  <?php }?>

<?php }
}
}
