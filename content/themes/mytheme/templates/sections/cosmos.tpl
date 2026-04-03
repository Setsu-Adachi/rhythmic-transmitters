{* Cosmos Section - Dark with wave top *}
<section class="cosmos" id="cosmos" data-section="1">
    <div class="wave-divider wave--light-to-dark"></div>
    <div class="cosmos__inner">
        <div class="cosmos__header">
            <h2 class="cosmos__title">The Chromomorphic Cosmos</h2>
            <p class="cosmos__subtitle">Each planet carries a phenomenal colour, a soul quality, and an ancient geometric form. Together they compose the chromomorphic field — the living palette of colour and form in movement.</p>
        </div>
        <div class="cosmos__grid">
            {foreach $cosmos_planets as $planet}
            <div class="cosmos__card" style="background: {$planet.gradient};">
                <div class="cosmos__card-symbol cosmos__card-symbol--{$planet.symbol}"></div>
                <div class="cosmos__card-info">
                    <h3 class="cosmos__card-name">{$planet.name}</h3>
                    <p class="cosmos__card-qualities">{$planet.qualities}</p>
                    <p class="cosmos__card-form">{$planet.form}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>
