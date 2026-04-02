<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:47
  from 'file:sections/cosmos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0bf6b4db1_35869265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f7eac54a706e38a83275295d71de7d2cde5b86' => 
    array (
      0 => 'sections/cosmos.tpl',
      1 => 1774589052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc0bf6b4db1_35869265 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\sections';
?><section class="cosmos" id="cosmos" data-section="1">
    <div class="wave-divider wave--light-to-dark"></div>
    <div class="cosmos__inner">
        <div class="cosmos__header">
            <h2 class="cosmos__title">The Chromomorphic Cosmos</h2>
            <p class="cosmos__subtitle">Each planet carries a phenomenal colour, a soul quality, and an ancient geometric form. Together they compose the chromomorphic field — the living palette of colour and form in movement.</p>
        </div>
        <div class="cosmos__grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cosmos_planets'), 'planet');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('planet')->value) {
$foreach2DoElse = false;
?>
            <div class="cosmos__card" style="background: <?php echo $_smarty_tpl->getValue('planet')['gradient'];?>
;">
                <div class="cosmos__card-symbol cosmos__card-symbol--<?php echo $_smarty_tpl->getValue('planet')['symbol'];?>
"></div>
                <div class="cosmos__card-info">
                    <h3 class="cosmos__card-name"><?php echo $_smarty_tpl->getValue('planet')['name'];?>
</h3>
                    <p class="cosmos__card-qualities"><?php echo $_smarty_tpl->getValue('planet')['qualities'];?>
</p>
                    <p class="cosmos__card-form"><?php echo $_smarty_tpl->getValue('planet')['form'];?>
</p>
                </div>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
