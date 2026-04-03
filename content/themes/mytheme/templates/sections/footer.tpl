{* Footer Section - Dark background *}
<footer class="footer" id="footer">
    <div class="footer__quote">
        <blockquote>The rhythm lives between us — in the space where one person's gesture meets another's listening. Technology doesn't seize this. It observes alongside it.</blockquote>
    </div>
    <div class="footer__inner">
        <div class="footer__brand">
            <h4 class="footer__brand-name">Rhythmic Transmitters</h4>
            <p class="footer__brand-desc">An AHRC-funded CreaTech Frontiers project through Birmingham City University. Where chromomorphic colour and form meet the living gesture.</p>
        </div>
        <nav class="footer__nav">
            {foreach $footer_nav as $item}
            <a href="{$item.anchor}" class="footer__nav-link">{$item.label}</a>
            {/foreach}
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
