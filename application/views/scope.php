<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center no-padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
        <?=$menu;?>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table class="scope-table">
                    <tr>
                        <td class="scope-cell">
                            <a href="/scope/1">ДЕВЕЛОПМЕНТ</a>
                            <?=Arr::get(Arr::get($scopePages, 1, []), 'description');?>
                        </td>
                        <td class="scope-cell">
                            <a href="/scope/2">ПРОЕКТИРОВАНИЕ</a>
                            <?=Arr::get(Arr::get($scopePages, 2, []), 'description');?>
                        </td>
                    </tr>
                    <tr>
                        <td class="scope-cell">
                            <a href="/scope/3">КАДАСТР НЕДВИЖИМОСТИ</a>
                            <?=Arr::get(Arr::get($scopePages, 3, []), 'description');?>
                        </td>
                        <td class="scope-cell">
                            <a href="/scope/4">ИЗЫСКАНИЯ</a>
                            <?=Arr::get(Arr::get($scopePages, 4, []), 'description');?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
