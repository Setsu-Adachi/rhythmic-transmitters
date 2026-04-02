{* Collaborators Section - Gradient light background *}
<section class="collaborators" id="collaborators" data-section="5">
    <div class="wave-divider wave--light-to-dark" style="background-color: var(--color-cream);"></div>
    <div class="collaborators__inner">
        <div class="collaborators__header">
            <h2 class="collaborators__title">Collaborators</h2>
            <p class="collaborators__subtitle">A cross-disciplinary team bringing together performance, music, technology, and research.</p>
        </div>
        <div class="collaborators__grid">
            {foreach $collaborators as $person}
            <div class="collaborators__card">
                <span class="collaborators__card-role">{$person.role}</span>
                <h3 class="collaborators__card-name">{$person.name}</h3>
                <p class="collaborators__card-desc">{$person.desc}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>
