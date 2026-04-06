<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:47
  from 'file:sections/gallery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0bf6cecf6_45894451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79b9e9f4e00a88662ff7651938aaaa79408aa14' => 
    array (
      0 => 'sections/gallery.tpl',
      1 => 1774589073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc0bf6cecf6_45894451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\sections';
?><section class="gallery" id="gallery" data-section="4">
    <div class="wave-divider wave--dark-to-light"></div>
    <div class="gallery__inner">
        <h2 class="gallery__title">Colour and Form in Motion</h2>
        <p class="gallery__subtitle">The chromomorphic field made visible — each colour and form carrying the phenomenal quality of its celestial archetype.</p>
        <div class="gallery__grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gallery_items'), 'item');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
            <div class="gallery__item" style="background: <?php echo $_smarty_tpl->getValue('item')['gradient'];?>
;">
                <div class="gallery__item-symbol"></div>
                <div class="gallery__item-label">
                    <span class="gallery__item-name"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</span>
                    <span class="gallery__item-quality"><?php echo $_smarty_tpl->getValue('item')['quality'];?>
</span>
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
