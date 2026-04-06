{* Right side dot navigation *}
<nav class="sidenav" id="sidenav">
    {foreach $nav_items as $index => $item}
    <a href="{$item.anchor}" class="sidenav__dot {if $index === 0}active{/if}" data-label="{$item.label}" title="{$item.label}">
        <span class="sidenav__dot-inner" style="--symbol-color: {$item.color};">
            <span class="sidenav__symbol sidenav__symbol--{$item.symbol}"></span>
        </span>
        <span class="sidenav__label">{$item.label}</span>
    </a>
    {/foreach}
</nav>
