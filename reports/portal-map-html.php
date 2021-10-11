<!-- title -->
<div class="grid-x">
    <div class="cell padding-1" >
        <button type="button" style="margin:1em;" id="menu-icon" data-open="offCanvasLeft"><i class="fi-list" style="font-size:2em;"></i></button>
        <span style="font-size:1.5rem;font-weight: bold;">Map</span>
        <span class="loading-spinner active" style="float:right;margin:10px;"></span><!-- javascript container -->
    </div>
</div>

<!-- nav -->
<?php require_once ( 'portal-nav.php' ) ?>

<div id="heatmap"></div>
<script>jQuery(document).ready(function(){
        jQuery('#heatmap').html(`<iframe width="100%" height="${window.innerHeight}" src="https://global.zume.community/zume_app/heatmap_churches/" frameborder="0" style="border:0" allowfullscreen=""></iframe>`)
    })
</script>
