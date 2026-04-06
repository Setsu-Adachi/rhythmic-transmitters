<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:47
  from 'file:sections/process.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0bf6c7378_85513640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0dc66ce3b4b1d5df5243837fe5109a5ee32cfc2' => 
    array (
      0 => 'sections/process.tpl',
      1 => 1774589066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc0bf6c7378_85513640 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\sections';
?><section class="process" id="process" data-section="3">
    <div class="wave-divider wave--light-to-dark"></div>
    <div class="process__inner">
        <h2 class="process__title">From Gesture to Light</h2>
        <p class="process__subtitle">The creative pipeline — how living movement becomes digital art.</p>
        <div class="process__grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('process_steps'), 'step');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step')->value) {
$foreach3DoElse = false;
?>
            <div class="process__card">
                <div class="process__card-line"></div>
                <span class="process__card-num"><?php echo $_smarty_tpl->getValue('step')['num'];?>
</span>
                <h3 class="process__card-title"><?php echo $_smarty_tpl->getValue('step')['title'];?>
</h3>
                <p class="process__card-desc"><?php echo $_smarty_tpl->getValue('step')['desc'];?>
</p>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="wave-divider wave-divider--bottom-dark-to-light"></div>
</section>
<?php }
}
