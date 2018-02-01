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
		<title>Epilations</title>
	</head>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<body>
		<?php
			require_once("header.php");
		?>

		<section>
			<article  class="epilations">
				<?php
				require_once("menu.php");
				$menu = affiche_menu();
				echo $menu;
				?>
				<div>
					<h1>Prestations</h1>
				</div>


				<div class="soins_tabs left">
					<p>
					<h2>Epilations</h2>
					<table class="soins">
						<tr><td class="desc"><strong>Sourcils</strong></td><td class="prix">9 €</td></tr>
						<tr><td class="desc"><strong>Lèvres</strong></td><td class="prix">6,5 €</td></tr>
						<tr><td class="desc"><strong>Sourcils, lèvres et menton</strong></td><td class="prix">18 €</td></tr>
						<tr><td class="desc"><strong>1/2 jambes</strong></td><td class="prix">16 €</td></tr>
						<tr><td class="desc"><strong>Jambes complètes + maillot</strong></td><td class="prix">31 €</td></tr>
						<tr><td class="desc"><strong>Aisselles</strong></td><td class="prix">8,5 €</td></tr>
						<tr><td class="desc"><strong>Maillot</strong></td><td class="prix">9 €</td></tr>
						<tr><td class="desc"><strong>Maillot échancré</strong></td><td class="prix">15 €</td></tr>
						<tr><td class="desc"><strong>Maillot intégral</strong></td><td class="prix">24 €</td></tr>
						<tr><td class="desc"><strong>Bras</strong></td><td class="prix">17 €</td></tr>
						<tr><td class="desc"><strong>Torse/dos</strong></td><td class="prix">18 €</td></tr>
					</table>
					<h2>UV et TAN</h2>
					<table class="soins">
						<tr><td class="desc"><strong>A la séance</strong></td><td class="prix">8 €</td></tr>
						<!--<tr><td class="desc"><strong>Forfait de 10 séances</strong></td><td class="prix">66 €</td></tr>-->
						<tr><td class="desc"><strong>TAN visage, décolleté et bras</strong></td><td class="prix">20 €</td></tr>
						<tr><td class="desc"><strong>TAN corps complet</strong></td><td class="prix">39 €</td></tr>
						<tr>
							<td class="message_info">
								Attention ! L'exposition aux rayonnements d'un appareil de bronzage peut provoquer des cancers de la peau et les yeux et est responsable d'un vieillissement cutané prématuré.
								L'existence d'une réglementation du bronzage artificiel ne permet pas d'éliminer les risques sanitaires encourus en cas d'exposition, en particulier le risque de cancer.
								L'utilisation de ces appareils est interdite aux personnes de moins de 18 ans. Porter les lunettes de protection fournies.
							</td>
						</tr>
					</table>
					</p>
				</div>
				<div class="soins_tabs right">
					<p>
					<h2>Maquillage</h2>
					<table class="soins">
						<tr><td class="desc"><strong>Maquillage (avec ampoule)</strong></td><td class="prix">22 €</td></tr>
						<tr><td class="desc"><strong>Permanente des cils</strong></td><td class="prix">39 €</td></tr>
						<tr><td class="desc"><strong>Teinture des sourcils</strong></td><td class="prix">12 €</td></tr>
						<tr><td class="desc"><strong>Teinture des cils</strong></td><td class="prix">15 €</td></tr>
						<tr><td class="desc"><strong>Maquillage permanent - Technique de dermopigmentation sourcils, lèvres ou eye-liner pour un maquillage permanent sous forme de tatouage</strong></td><td class="prix">Tarifs: nous consulter</td></tr>
					</table>
					<h2>Ongles</h2>
					<table class="soins">
						<tr><td class="desc"><strong>Manucurie</strong></td><td class="prix">29 €</td></tr>
						<tr><td class="desc"><strong>Vernis semi permanent - French</strong></td><td class="prix">32 €</td></tr>
						<tr><td class="desc"><strong>Vernis semi permanent - Couleur</strong></td><td class="prix">28 €</td></tr>
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