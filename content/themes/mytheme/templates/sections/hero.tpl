{* Hero Section *}
<section class="hero" id="hero" data-section="0">
    <canvas class="hero__bubbles" id="bubblesCanvas"></canvas>
    <div class="hero__content">
        <p class="hero__tagline">{$tagline}</p>
        <h1 class="hero__title">
            <span class="hero__title-main"><h1>{$hero_title_1}</h1></span>
            <span class="hero__title-italic">{$hero_title_2}</span>
        </h1>
        <p class="hero__description">{$hero_description}</p>
        <div class="hero__tags">
            {foreach $hero_tags as $tag}
            <span class="hero__tag">{$tag}</span>
            {/foreach}
        </div>
    </div>
</section>
