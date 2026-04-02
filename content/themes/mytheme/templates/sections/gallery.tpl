{* Gallery / Colour and Form in Motion Section - Light background *}
<section class="gallery" id="gallery" data-section="4">
    <div class="wave-divider wave--dark-to-light"></div>
    <div class="gallery__inner">
        <h2 class="gallery__title">Colour and Form in Motion</h2>
        <p class="gallery__subtitle">The chromomorphic field made visible — each colour and form carrying the phenomenal quality of its celestial archetype.</p>
        <div class="gallery__grid">
            {foreach $gallery_items as $item}
            <div class="gallery__item" style="background: {$item.gradient};">
                <div class="gallery__item-symbol"></div>
                <div class="gallery__item-label">
                    <span class="gallery__item-name">{$item.name}</span>
                    <span class="gallery__item-quality">{$item.quality}</span>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>
