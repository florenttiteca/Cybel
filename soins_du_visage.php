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
		<title>Soins du visage</title>
	</head>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<body>
		<?php
			require_once("header.php");
		?>

		<section>
			<article class="soins_visage">
				<?php
				require_once("menu.php");
				$menu = affiche_menu();
				echo $menu;
				?>
				<div>
					<p>
						<h1>Soins du visage</h1>
					</p>
				</div>
				<div class="soins_tabs left">
					<p>
						<h2>Maria Galland</h2>
						<table class="soins">
							<tr><td class="desc"><strong>Soin cocon</strong>  " le soin cocooning "  (1h30)</td><td class="prix">63 €</td></tr>
							<tr><td class="desc"><strong>Soin modelant</strong>  " l'effet lifting sur mesure "  (1h30)</td><td class="prix">73 €</td></tr>
							<tr><td class="desc"><strong>Soin tendresse</strong>  " la douceur par excellence "  (1h15)</td><td class="prix">58 €</td></tr>
							<tr><td class="desc"><strong>Soin prestige</strong>  " le soin éclat jeunesse "  (1h30)</td><td class="prix">65 €</td></tr>
							<tr><td class="desc"><strong>Soin profilift</strong>  " la performance anti âge "  (1h30)</td><td class="prix">70 €</td></tr>
							<tr><td class="desc"><strong>Soin thalasso</strong>  " la cure venue de la mer "  (1h30)</td><td class="prix">70 €</td></tr>
						</table>
						<h2>Endermolift</h2>
						<table class="soins">
							<tr><td class="desc"><strong>Soin Endermolift</strong>  " Les meilleurs résultats sont obtenus en 6 semaines à raison d'une séance par semaine "</td><td class="prix">65 €</td></tr>
						</table>
						<p class="nouveaute">
							<img class="img_nouveaute" src="images/endermolift.png"/>
						</p>
						<h2>Autres soins spécifiques</h2>
						<table class="soins">
							<tr><td class="desc"><strong>Soin végétal infra rouges</strong>  (1h30)</td><td class="prix">69 €</td></tr>
							<tr><td class="desc"><strong>Soin collagène</strong>  " l'anti âge par excellence "  (1h30)</td><td class="prix">61 €</td></tr>
							<tr><td class="desc"><strong>Soin jeune</strong>  " la pureté de la peau "  (1h)</td><td class="prix">45 €</td></tr>
							<tr><td class="desc"><strong>Soin yeux</strong>  " éclat et fraicheur du regard "  (45 min)</td><td class="prix">38 €</td></tr>
						</table>
						<br>
						<table class="soins">
							<tr><td class="desc"><strong>Formule visage et corps </strong>  " Une soin visage spécifique et un modelage californien "  (2h30)</td><td class="prix">127 €</td></tr>
						</table>
					</p>
				</div>
				<div class="soins_tabs right">
					<p>
						<h2>Pier Augé</h2>
						<table class="soins">
							<tr><td class="desc"><strong>Soin PA crème</strong>  " le nettoyage de peau "  (1h15)</td><td class="prix">56 €</td></tr>
							<tr><td class="desc"><strong>Soin vitamine C</strong>  " le plein de vitamines "  (1h30)</td><td class="prix">63 €</td></tr>
							<tr><td class="desc"><strong>Soin cryo</strong>  " l'anti âge fraicheur "  (1h)</td><td class="prix">63 €</td></tr>
							<tr><td class="desc"><strong>Soin éclaircissant</strong>  " la luminosité du teint "  (1h30)</td><td class="prix">60 €</td></tr>
							<tr><td class="desc"><strong>Soin lumière</strong>  " l'oxygénation du teint "  (1h30)</td><td class="prix">63 €</td></tr>
						</table>
						<h2>Nouveauté: Soin anti-âge Wishpro</h2>
						<table class="soins">
							<tr><td class="desc"><strong>Soin Wishpro </strong></td><td class="prix">70 €</td></tr>
						</table>
						<p class="nouveaute">
							<a href="http://www.wishpro-france.com/" target="_blank"><img class="img_nouveaute" src="images/wishpro.jpg"/><br></a>
							<a href="http://www.wishpro-france.com/" target="_blank">Site Wishpro France</a>
						</p>
						<h2>Radio fréquence</h2>
						<table class="soins">
							<tr><td class="desc"><strong>Nouvelle technologie </strong> " La peau est contituée de trois couches, l'épiderme, partie visible, le derme, riche en collagène et l'hypoderme,
							constitué de graisse et de fibres de collagène. Avec le temps et sous l'influence de divers facteurs (hygiène de vie, prises de poids, hérédité, expositions solaires...),
							les fibres de collagène subissent des altérations, se raréfient: la peau se relâche." </td></tr>
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