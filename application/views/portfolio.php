<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center no-padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
        <div class="menu-item">Портфолио</div>
        <div class="portfolio-menu">
        <?foreach ($pages as $page) {
            $class = $page['id'] == Arr::get($get, 'id') ? 'portfolio-menu-item active' : 'portfolio-menu-item';
            ?>
            <a class="<?=$class;?>" href="/portfolio/<?=$page['id'];?>"><?=$page['title'];?></a>
        <?}?>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page">
        <div class="page-title"><?=Arr::get($pageData, 'title');?></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page-content"><?=Arr::get($pageData, 'content');?></div>
    </div>
</div>