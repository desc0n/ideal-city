<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 menu">
        <?foreach ($pages as $page) {?>
        <div class="menu-item">
            <a href="/page/<?=$page['slug'];?>"><?=$page['title'];?></a>
        </div>
        <?}?>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
</div>
