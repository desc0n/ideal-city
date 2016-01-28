    <?
    $request = Request::initial()->current();

    foreach ($pages as $page) {
        if ($page['slug'] == 'portfolio') {
            $collapseIn = $request->action() == 'portfolio' ? 'in' : '';
            ?>
    <div class="menu-item"  id="portfolio">
        <a data-toggle="collapse" data-parent="#portfolio" href="#collapseOne">
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
        <?} else {
            $class = $page['slug'] == $request->param('id') ? 'menu-item active' : 'menu-item';
            ?>
    <a class="<?=$class;?>" href="/page/<?=$page['slug'];?>"><?=$page['title'];?></a>
            <?
        }
    }?>

