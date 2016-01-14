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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 news">
            <div class="news-title">Новости</div>
            <?foreach ($news as $newsData) {?>
            <div class="news-date"><?=Date::convertStrDateToFormat($newsData['date'], 'd.m.Y');?> г.</div>
            <div class="news-content"><?=$newsData['content'];?></div>
            <?}?>
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
