<?php
/* Smarty version 5.7.0, created on 2026-04-01 07:12:22
  from 'file:sections/hero.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc556e6b332_70924252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4afc3c85a8c483978d28dc97f4f66d49d866d592' => 
    array (
      0 => 'sections/hero.tpl',
      1 => 1775027540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc556e6b332_70924252 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\sections';
?><section class="hero" id="hero" data-section="0">
    <canvas class="hero__bubbles" id="bubblesCanvas"></canvas>
    <div class="hero__content">
        <p class="hero__tagline"><?php echo $_smarty_tpl->getValue('tagline');?>
</p>
        <h1 class="hero__title">
            <span class="hero__title-main"><h1><?php echo $_smarty_tpl->getValue('hero_title_1');?>
</h1></span>
            <span class="hero__title-italic"><?php echo $_smarty_tpl->getValue('hero_title_2');?>
</span>
        </h1>
        <p class="hero__description"><?php echo $_smarty_tpl->getValue('hero_description');?>
</p>
        <div class="hero__tags">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('hero_tags'), 'tag');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tag')->value) {
$foreach0DoElse = false;
?>
            <span class="hero__tag"><?php echo $_smarty_tpl->getValue('tag');?>
</span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
