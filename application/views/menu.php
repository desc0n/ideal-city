    <?
    $request = Request::initial()->current();

    foreach ($pages as $page) {
        if ($page['slug'] == 'portfolio') {
            $collapseIn = $request->action() == 'portfolio' ? 'in' : '';
            ?>
    <div class="panel">
        <div class="menu-item"  id="portfolio">
            <a data-toggle="collapse" href="#collapseOne"  data-parent=".menu">
                Портфолио
            </a>
        </div>
        <div class="portfolio-menu collapse <?=$collapseIn;?>"  id="collapseOne">
        <?foreach ($portfolioPages as $portfolioPage) {
            $portfolioClass = $portfolioPage['id'] == $request->param('id') && $request->action() == 'portfolio'? 'portfolio-menu-item active' : 'portfolio-menu-item';
            ?>
            <a class="<?=$portfolioClass;?>" href="/portfolio/<?=$portfolioPage['id'];?>"><?=$portfolioPage['title'];?></a>
        <?}?>
        </div>
    </div>
        <?} elseif ($page['slug'] == 'scope') {
            $collapseIn = $request->action() == 'scope' ? 'in' : '';
            ?>
    <div class="panel">
        <div class="menu-item"  id="scope">
            <a data-toggle="collapse" href="#collapseTwo" data-parent=".menu">
                Сфера деятельности
            </a>
        </div>
        <div class="scope-menu collapse <?=$collapseIn;?>"  id="collapseTwo">
        <?foreach ($scopePages as $scopePage) {
            $scopeClass = $scopePage['id'] == $request->param('id') && $request->action() == 'scope'? 'scope-menu-item active' : 'scope-menu-item';
            ?>
            <a class="<?=$scopeClass;?>" href="/scope/<?=$scopePage['id'];?>"><?=$scopePage['title'];?></a>
        <?}?>
        </div>
    </div>
        <?} else {
            $class = $page['slug'] == $request->param('id') ? 'menu-item active' : 'menu-item';
            ?>
    <a class="<?=$class;?>" href="/page/<?=$page['slug'];?>"><?=$page['title'];?></a>
            <?
        }
    }?>
