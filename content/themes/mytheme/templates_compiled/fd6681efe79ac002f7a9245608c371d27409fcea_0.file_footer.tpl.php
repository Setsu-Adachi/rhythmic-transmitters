<?php
/* Smarty version 5.7.0, created on 2026-04-01 06:52:47
  from 'file:sections/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ccc0bf6e1f37_10018708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6681efe79ac002f7a9245608c371d27409fcea' => 
    array (
      0 => 'sections/footer.tpl',
      1 => 1774588777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ccc0bf6e1f37_10018708 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\whatson.world\\content\\themes\\mytheme\\templates\\sections';
?><footer class="footer" id="footer">
    <div class="footer__quote">
        <blockquote>The rhythm lives between us — in the space where one person's gesture meets another's listening. Technology doesn't seize this. It observes alongside it.</blockquote>
    </div>
    <div class="footer__inner">
        <div class="footer__brand">
            <h4 class="footer__brand-name">Rhythmic Transmitters</h4>
            <p class="footer__brand-desc">An AHRC-funded CreaTech Frontiers project through Birmingham City University. Where chromomorphic colour and form meet the living gesture.</p>
        </div>
        <nav class="footer__nav">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('footer_nav'), 'item');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach6DoElse = false;
?>
            <a href="<?php echo $_smarty_tpl->getValue('item')['anchor'];?>
" class="footer__nav-link"><?php echo $_smarty_tpl->getValue('item')['label'];?>
</a>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </nav>
    </div>
    <div class="footer__bottom">
        <div class="footer__credits-left">
            <span>CreaTech Frontiers · Birmingham City University · University of Warwick · AHRC</span>
        </div>
        <div class="footer__credits-right">
            <span>WhatsOn Agency · Metro Pages Ltd</span>
        </div>
    </div>
</footer>
<?php }
}
