{if $items}

{add_js file='includes/jquery/nivoslider/jquery.nivo.slider.pack.js'}
{add_css file='includes/jquery/nivoslider/themes/default/default.css'}
{add_css file='includes/jquery/nivoslider/nivo-slider.css'}

<div class="slider-wrapper theme-default">
    <div id="slider{$module_id}" class="nivoSlider">
        {foreach key=tid item=item from=$items name=foo}
            <a target="_blank" title="{$item.title|escape:'html'}" href="/gobanner{$item.id}">
                <img border="0" alt="{$item.title|escape:'html'}" src="/images/banners/{$item.fileurl}" data-thumb="/images/banners/{$item.fileurl}">
            </a>
        {/foreach}
    </div>
</div>

{*
USE caption:
1. for <img> add attr title="#htmlcaption{$smarty.foreach.foo.index}"
2. caption title + desc:
*}
{*
{foreach key=tid item=con from=$items name=foo}
<div id="htmlcaption{$smarty.foreach.foo.index}" class="nivo-html-caption">
    <span class="nivo-slide-title">{$con.title|escape:'html'}</span>
    <span class="nivo-slide-desc">
        {$con.description}
    </span>
</div>
{/foreach}
*}

{* nivoSlider init: *}
<script type="text/javascript">
$(window).load(function() {
    $('#slider{$module_id}').nivoSlider({
        effect: '{$cfg.effect}',
        slices: {$cfg.slices},
        boxCols: {$cfg.boxCols},
        boxRows: {$cfg.boxRows},
        animSpeed: {$cfg.animSpeed},
        pauseTime: {$cfg.pauseTime},
        directionNav: {$cfg.directionNav},
        directionNavHide: {$cfg.directionNavHide},
        controlNav: {$cfg.controlNav},
        controlNavThumbs: {$cfg.controlNavThumbs},
        pauseOnHover: {$cfg.pauseOnHover},
        manualAdvance: {$cfg.manualAdvance},
        prevText: '{$cfg.prevText}',
        nextText: '{$cfg.nextText}'
    });
});
</script>
{/if}