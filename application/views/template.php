<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Идеальный город</title>

    <!-- Bootstrap -->
    <link href="/public/css/bootstrap.css" rel="stylesheet">
    <link href="/public/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/font-awesome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container header">
    </div>
    <div class="container content">
        <?=$content;?>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 news">
            <div class="news-title">Новости</div>
            <?foreach ($news as $newsData) {?>
            <div class="news-date"><?=Date::convertStrDateToFormat($newsData['date'], 'd.m.Y');?> г.</div>
            <div class="news-content"><?=$newsData['content'];?></div>
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
                            var so = new SWFObject("/tagcloud/tagcloud.swf?r="+rnumber, "tagcloudflash", "185", "185", "9");
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
    <div class="container footer">

    </div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/public/js/bootstrap.min.js"></script>
</html>
