<div class="footer-container container">
    <div class="slider center">
        <?foreach ($pagesImgs as $img) {?>
        <div>
            <?=(isset($img['project_link']) ? sprintf('<a href="%s" target="_blank">', $img['project_link']) : '');?>
            <img src="/public/img/<?=(isset($project) ? 'projects/' : null);?>thumb/<?=$img['src'];?>">
            <?=(isset($img['project_link']) ? '</a>' : '');?>
        </div>
        <?}?>
    </div>
</div>
<script>
    $('.center').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        centerMode: true,
        centerPadding: '180px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>