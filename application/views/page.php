<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
        <?foreach ($pages as $page) {
            $class = $page['slug'] == Arr::get($get, 'id') ? 'menu-item active' : 'menu-item';
            ?>
            <a class="<?=$class;?>" href="/page/<?=$page['slug'];?>"><?=$page['title'];?></a>
        <?}?>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page">
        <div class="page-title"><?=Arr::get($pageData, 'title');?></div>
        <div class="page-content"><?=Arr::get($pageData, 'content');?></div>
    </div>
</div>