<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center no-padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
        <?=$menu;?>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 page-block">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page">
        <div class="page-title"><?=Arr::get($pageData, 'title');?></div>
        <div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12 baguetteBoxOne gallery"><?=Arr::get($pageData, 'content');?></div>
    </div>
</div>
<!--[if lt IE 9]>
<script>
    var oldIE = true;
</script>
<![endif]-->
<script>
    window.onload = function() {
        baguetteBox.run('.baguetteBoxOne');
    };
</script>