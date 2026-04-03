{* Process Section - Dark background with wave *}
<section class="process" id="process" data-section="3">
    <div class="wave-divider wave--light-to-dark"></div>
    <div class="process__inner">
        <h2 class="process__title">From Gesture to Light</h2>
        <p class="process__subtitle">The creative pipeline — how living movement becomes digital art.</p>
        <div class="process__grid">
            {foreach $process_steps as $step}
            <div class="process__card">
                <div class="process__card-line"></div>
                <span class="process__card-num">{$step.num}</span>
                <h3 class="process__card-title">{$step.title}</h3>
                <p class="process__card-desc">{$step.desc}</p>
            </div>
            {/foreach}
        </div>
    </div>
    <div class="wave-divider wave-divider--bottom-dark-to-light"></div>
</section>
