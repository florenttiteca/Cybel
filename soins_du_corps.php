<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-language" content="fr">
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="/css/style_institut.css" />
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
		<link rel="icon" type="image/png" href="images/faviconcybel.png" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
		<title>Soins du corps</title>
	</head>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<body>
		<?php
			require_once("header.php");
		?>

		<section>
			<article class="soins_corps">
				<?php
				require_once("menu.php");
				$menu = affiche_menu();
				echo $menu;
				?>
				<p>
					<h1>Soins du corps</h1>
				</p>


				<div class="soins_tabs left">
					<p>
<!--					<h2>Maria Galland</h2>-->
					<table class="soins">
						<tr><td class="desc"><strong>Californien</strong>  " Modelage relaxant aux huiles chaudes "  (1h)</td><td class="prix">64 €</td></tr>
						<tr><td class="desc"><strong>Balinais</strong>  " Modelage relaxant et énergétique alliant pressions glissées, étirements et pétrissages "  (1h15)</td><td class="prix">70 €</td></tr>
						<tr><td class="desc"><strong>Indien</strong>  " Modelage harmonisant corps et esprit grâce à un enchainement de pressions digitales et manoeuvres dynamisantes "  (1h15)</td><td class="prix">75 €</td></tr>
						<tr><td class="desc"><strong>Hawaïen</strong>  " Modelage enveloppant et très relaxant effectué avec les mains, coudes et avants bras "  (1h30)</td><td class="prix">90 €</td></tr>
						<tr><td class="desc"><strong>Escapade à Hawaï</strong>  " Modelage aux pierres chaudes "  (1h)</td><td class="prix">70 €</td></tr>
						<tr><td class="desc"><strong>Voyage au coeur de l'Amazonie</strong>  " Gommage aux noix de Macadamia, modelage relaxant au beurre de karité et enveloppement crépitant aux terres amazoniennes "  (1h45)</td><td class="prix">89 €</td></tr>
					</table>
					</p>
				</div>
				<div class="soins_tabs right">
					<p>
<!--					<h2>Autres soins spécifiques</h2>-->
					<table class="soins">
						<tr><td class="desc"><strong>Plongeon en eaux profondes</strong>  " Gommage aux sels marins, modelage relaxant aux extraits de laminaires et enveloppements d'algues "  (1h30)</td><td class="prix">62 €</td></tr>
						<tr><td class="desc"><strong>Evasion aux caraïbes</strong>  " Pâte gommante au sucre et au pamplemousse, modelage au beurre à la fleur d'oranger et enveloppement fondant au chocolat "  (1h45)</td><td class="prix">87 €</td></tr>
						<tr><td class="desc"><strong>Envol au Maroc</strong>  " Gommage drainant à l'eucalyptus et enveloppement chaud au rhassoul "  (1h)</td><td class="prix">54 €</td></tr>
						<tr><td class="desc"><strong>Soin du dos</strong></td><td class="prix">55 €</td></tr>
						<tr><td class="desc"><strong>Presso-esthétique</strong></td><td class="prix">31 €</td></tr>
					</table>
					</p>
				</div>
				<div>
					<h1>Réservations</h1>
					<p>Pour tous soins, veuillez réserver par téléphone pendant les horaires d'ouverture de l'institut.</p>
				</div>
			</article>
			<aside>
				<div class="container">
					<div class="carrousel" id="carrousel_soins">
						<a class="soins" href="#">
							<img src="images/photos_soins/cab1.jpg">
						</a>
						<a class="soins" href="#">
							<img src="images/photos_soins/cab2.jpg">
						</a>
						<a class="soins" href="#">
							<img src="images/photos_soins/cab3.jpg">
						</a>
						<a class="soins" href="#">
							<img src="images/photos_soins/cab4.jpg">
						</a>
						<a class="soins" href="#">
							<img src="images/photos_soins/cab5.jpg">
						</a>
						<a class="soins" href="#">
							<img src="images/photos_soins/cab6.jpg">
						</a>
						<a class="soins" href="#">
							<img src="images/photos_soins/cab7.jpg">
						</a>
					</div>
				</div>
			</aside>
		</section>
		<?php
			require_once("footer.php");
		?>
	</body>
	<script type="text/javascript" src="js/carouFredSel-6.2.1/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/carouFredSel-6.2.1/caroufredsel.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-53105116-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
</html>