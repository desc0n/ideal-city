<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Идеальный город</title>
    <link rel="icon" href="/public/i/fav.png" sizes="38x38" type="image/png">
    <!-- Bootstrap -->
    <link href="/public/css/bootstrap.css" rel="stylesheet">
    <link href="/public/css/custom.css?v=6" rel="stylesheet">
    <link href="/public/css/slick.css" rel="stylesheet">
    <link href="/public/css/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/font-awesome.css">
    <link rel="stylesheet" href="/public/css/jquery.rollbar.css">
    <link rel="stylesheet" href="/public/css/baguetteBox.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/slick.js"></script>
    <script type="text/javascript" src="/public/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/public/js/jquery.rollbar.min.js"></script>
    <script src="/public/js/baguetteBox.js" async></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.hit, .page, .news-page').rollbar({zIndex:80});
        });
    </script>
    <script type="text/javascript">
        $(function(){
            var base = 'body';
            $('a[href^="#"]').each(function(){
                var name = $(this).attr('href').substr(1);
                var anchor = document.getElementById(name) || document.getElementsByName(name);
                if(anchor = (anchor.item)?anchor.item(0):anchor){
                    var offset = $(base+' > .rollbar-content').height() - $(anchor).offset().top;
                    $(this).click(function(){
                        $(base).trigger('rollbar',-offset);
                    });
                }
            });
        });
    </script>
</head>
<body>
    <div id="layout1">
        <img src="/public/i/bg.jpg">
    </div>
    <div id="layout2">
        <div id="wrapper">
            <div class="header">
                <div class="container">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 no-padding text-center">
                        <a href="/" target="_self"><img src="/public/i/logo.png" class="logo"></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="header-container">
                            <img src="/public/i/header_text.png" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 search-container">
                        <p>ООО АПК «Идеальный Город»</p>
                        <p>ООО «Идеал-Кадастр»</p>
                        <p>ГК «БГК Инвест»</p>
                        <p>ООО «СтИГ»</p>
                        <form class="navbar-form navbar-right" action="/">
                            <div class="input-group nav-search">
                                <input type="text" class="form-control" name="name" placeholder="искать" value="">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="metro-container">
                <table class="metro">
                    <tr>
                        <td>выбор участка</td>
                        <td></td>
                        <td>геология</td>
                        <td></td>
                        <td>технические условия</td>
                        <td></td>
                        <td>согласование проекта</td>
                        <td></td>
                        <td>разрешение на строительство</td>
                        <td></td>
                        <td>технический план</td>
                        <td></td>
                        <td>кадастровый учет</td>
                        <td></td>
                    </tr>
                    <tr class="middle-row">
                        <td id="point1"><img src="/public/i/metro_point.png" /></td>
                        <td id="point2"><img src="/public/i/metro_point.png" /></td>
                        <td id="point3"><img src="/public/i/metro_point.png" /></td>
                        <td id="point4"><img src="/public/i/metro_point.png" /></td>
                        <td id="point5"><img src="/public/i/metro_point.png" /></td>
                        <td id="point6"><img src="/public/i/metro_point.png" /></td>
                        <td id="point7"><img src="/public/i/metro_point.png" /></td>
                        <td id="point8"><img src="/public/i/metro_point.png" /></td>
                        <td id="point9"><img src="/public/i/metro_point.png" /></td>
                        <td id="point10"><img src="/public/i/metro_point.png" /></td>
                        <td id="point11"><img src="/public/i/metro_point.png" /></td>
                        <td id="point12"><img src="/public/i/metro_point.png" /></td>
                        <td id="point13"><img src="/public/i/metro_point.png" /></td>
                        <td id="point14"><img src="/public/i/metro_point.png" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>топография</td>
                        <td></td>
                        <td>концепция</td>
                        <td></td>
                        <td>проектирование</td>
                        <td></td>
                        <td>экспертиза</td>
                        <td></td>
                        <td>сопровождение строительства</td>
                        <td></td>
                        <td>ввод в эксплуатацию</td>
                        <td></td>
                        <td>регистрация прав</td>
                    </tr>
                </table>
            </div>
            <div class="container content">
                <?=$content;?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 news">
                    <div class="news-title"><a class="news-title" href="/news/all">Новости</a></div>
                    <?foreach ($news as $newsData) {?>
                        <div class="news-date"><?=Date::convertStrDateToFormat($newsData['date'], 'd.m.Y');?> г.</div>
                        <div class="news-content">
                            <?=mb_substr(strip_tags(trim($newsData['content'])), 0, 100);?>...
                            <a href="<?=$newsData['source_link'];?>" class="news-link" target="_blank">Подробнее</a>
                        </div>
                    <?}?>
                    <table style="border-collapse: collapse; height: 25%; width: 25%;">
                        <tbody>
                        <tr>
                            <td style="border: 0 solid rgb(0, 0, 0);">
                                <script type="text/javascript" src="/tagcloud/swfobject.js"></script>
                                <div id="3dcloud_block" style="text-align:center;font-size:12pt;">
                                    Для отображения блока требуется
                                    <noindex>
                                        <a href="http://get.adobe.com/flashplayer" rel="nofollow" target="_blank" title="Скачать Flash Player бесплатно">
                                            Flash Player
                                        </a>
                                    </noindex>
                                    <br><br>
                                    $MYINF_0$
                                </div>
                                <script type="text/javascript">
                                    var rnumber = Math.floor(Math.random()*9999999);
                                    var so = new SWFObject("/tagcloud/tagcloud.swf?r="+rnumber, "tagcloudflash", "180", "130", "9");
                                    var tags = "" +
                                        <?foreach ($cloudTag as $tag) {?>
                                        "<a href='/page/<?=$tag['slug'];?>' style='font-size:8px;'><?=$tag['title'];?></a>" +
                                        <?}?>
                                        "";
                                    tags = tags.replace(/"/g,"‘");
                                    tags = tags.replace(/<noindex>/gi,"");
                                    tags = tags.replace(/<\/noindex>/gi,"");
                                    tags = "<tags>" + tags + "</tags>";
                                    so.addParam("wmode", "transparent");
                                    so.addParam("allowScriptAccess", "always");
                                    so.addVariable("minFontSize", "1");
                                    so.addVariable("maxFontSize", "2.5");
                                    so.addVariable("tcolor", "0xE31E24");
                                    so.addVariable("tcolor2", "0xE31E24");
                                    so.addVariable("hicolor", "0xE31E24");
                                    so.addVariable("tspeed", "100");
                                    so.addVariable("distr", "true");
                                    so.addVariable("mode", "tags");
                                    so.addVariable("tagcloud", tags);
                                    so.write("3dcloud_block");
                                </script>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer-push"></div>
            <div class="container footer">
                <?=$footer;?>
            </div>
        </div>
    </div>
    <input type="hidden" id="point" value="1">
</body>
<script>
    function rideMetro()
    {
        var i = $('#point').val() * 1;

        prevPoint = i == 1 ? 14 : i - 1;
        nextPoint = i == 14 ? 1 : i + 1;

        $('#point' + prevPoint).html('<img src="/public/i/metro_point.png" />');
        $('#point' + i).html('<img src="/public/i/metro_point_alt.png" />');

        $('#point').val(nextPoint);
    }

    setInterval('rideMetro()', 2000);

    $(document).ready(function(){
       /*if($(window).height() < 750) {
           $('.footer').css({
               "position" : "relative",
               "left" : "inherit",
               "top" : "inherit"
            });

           $('.footer-push').css({
               "height" : "10px"
            });
       }*/
    })
    ;
</script>
</html>
