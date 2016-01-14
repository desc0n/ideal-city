<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title></title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
<body>
	<div class="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a class="gohome" href="/"></a>
					</div>

				</div>

			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-xs12 hcontacts">
					<i class="fa fa-mobile"></i><span>201-81-55</span>,  8 (924) 731-81-55, 8 (914) 730-86-02<br/>
			WhatsApp: 8 (914) 730-86-02,  E-mail: natasha.basova.80@mail.ru
				</div>
			</div>
		</div>
	</div>
  	<div class="container main">
		<div class="col-sm-4">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="../"><i class="fa fa-circle-o"></i>Главная</a></li>
				<li><a href="1.php"><i class="fa fa-circle-o"></i>Авточехлы</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Перетяжка сидений</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Перетяжка панелей и потолков</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Перетяжка рулей и ручек КПП</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Перетяжка сидений мото и водного транспорта</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i>Материал с которым работаем</a></li>
			</ul>
			<img src="i/car.png" class="car">
		</div>
  		<div class="col-sm-8 row description">
  			<h2>О компании</h2>	
  			<p>Автоателье  "Скорпион" зарекомендовало себя на рынке услуг Дальнего Востока по ремонту и обновлению салона автомобиля.
  				Мы предоставляем следующие услуги : перетяжка сидений, потолков, торпед, дверных панелей, консоли, бардочков, рулей, пошив чехлов, реставрация просевшего поролона, удаление прокуров, порезов, замена фрагментов ( при потертостях на сиденье ) , а также делаем перетяжку сидений мото и водной техники.
  				Наши квалифицированные специалисты посоветуют в выборе материала и дизайна, доступного для любого бюджета.</p>
  				<p>Мы рады вас видеть по адресу улица Адмирала Юмашева 35, со вторника по субботу с 9.00 до 18.00.</p> 
  				<p>Всю интересующую  вас информацию вы можете узнать по телефонам : 201-81-55, 8 (924) 731-81-55, 8 (914) 730-86-02 .</p>
  				<p>А также можете задать свой вопрос по эл.почте  <a href="mailto:natasha.basova.80@mail.ru">natasha.basova.80@mail.ru</a></p>
			<div class="col-sm-12 row">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=D3Qc-r9Kmo3KpMA5eqUtna2-Z3zm2mpT&width=750&height=450"></script>
  			</div>
		</div>
	</div>
	<div id="blueimp-gallery" class="blueimp-gallery">
		<!-- The container for the modal slides -->
		<div class="slides"></div>
		<!-- Controls for the borderless lightbox -->
		<h3 class="title"></h3>
		<a class="prev">‹</a>
		<a class="next">›</a>
		<a class="close">×</a>
		<a class="play-pause"></a>
		<ol class="indicator"></ol>
		<!-- The modal dialog, which will be used to wrap the lightbox content -->
		<div class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" aria-hidden="true">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body next"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left prev">
							<i class="glyphicon glyphicon-chevron-left"></i>
							Previous
						</button>
						<button type="button" class="btn btn-primary next">
							Next
							<i class="glyphicon glyphicon-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<p class="text-muted">© 2015</p>
		</div>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-image-gallery.js"></script>
</body>
</html>
