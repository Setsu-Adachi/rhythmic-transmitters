<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:47
  from 'file:sections/collaborators.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0bf6d8b15_85827655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b7b9817fc70a8ead633d71326133fc916b7de59' => 
    array (
      0 => 'sections/collaborators.tpl',
      1 => 1774589079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc0bf6d8b15_85827655 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\sections';
?><section class="collaborators" id="collaborators" data-section="5">
    <div class="wave-divider wave--light-to-dark" style="background-color: var(--color-cream);"></div>
    <div class="collaborators__inner">
        <div class="collaborators__header">
            <h2 class="collaborators__title">Collaborators</h2>
            <p class="collaborators__subtitle">A cross-disciplinary team bringing together performance, music, technology, and research.</p>
        </div>
        <div class="collaborators__grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('collaborators'), 'person');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('person')->value) {
$foreach5DoElse = false;
?>
            <div class="collaborators__card">
                <span class="collaborators__card-role"><?php echo $_smarty_tpl->getValue('person')['role'];?>
</span>
                <h3 class="collaborators__card-name"><?php echo $_smarty_tpl->getValue('person')['name'];?>
</h3>
                <p class="collaborators__card-desc"><?php echo $_smarty_tpl->getValue('person')['desc'];?>
</p>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
