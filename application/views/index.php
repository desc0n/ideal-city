<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
        <?foreach ($pages as $page) {?>
        <div class="menu-item">
            <a href="/page/<?=$page['slug'];?>"><?=$page['title'];?></a>
        </div>
        <?}?>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hit">
        <div class="hit-title"><?=Arr::get($hit, 'title');?></div>
        <div class="hit-content"><?=Arr::get($hit, 'content');?></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hit-img">
            <img src="/public/img/thumb/<?=Arr::get(Arr::get(Arr::get($hit, 'imgs', []), 0), 'src');?>">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hit-img">
            <img src="/public/img/thumb/<?=Arr::get(Arr::get(Arr::get($hit, 'imgs', []), 1), 'src');?>">
        </div>
    </div>
</div>
