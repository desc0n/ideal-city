<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center no-padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
        <?=$menu;?>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 news-page-block">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news-page">
        <?foreach ($pageData as $news) {?>
        <div class="row">
            <div class="news-page-title"><?=Arr::get($news, 'title');?></div>
            <div class="news-page-content col-lg-12 col-md-12 col-sm-12 col-xs-12"><?=Arr::get($news, 'content');?></div>
        </div>
        <?}?>
    </div>
</div>