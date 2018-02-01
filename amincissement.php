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
			<article  class="amincissement">
				<?php
				require_once("menu.php");
				$menu = affiche_menu();
				echo $menu;
				?>
				<div>
					<h1>Amincissement</h1>
				</div>


				<div class="soins_tabs left">
					<p>
					<h2>Lipo modelage de LPG</h2>
					<table class="soins">
						<tr><td class="desc"><strong>Pour déstocker les graisses, drainer, lisser, resculpter, raffermir...</strong></td><td class="prix">50 €</td></tr>
					</table>
					<h2>Objectif beauté</h2>
					<table class="soins">
						<tr><td class="desc"><strong>- Destocker les graisses résistantes</strong></td></tr>
						<tr><td class="desc"><strong>- Lisser la peau d'orange</strong></td></tr>
						<tr><td class="desc"><strong>- Raffermir la peau</strong></td></tr>
						<tr><td class="desc"><strong>- Resculpter les formes</strong></td></tr>
						<tr><td class="desc">&nbsp;</td></tr>
						<tr><td class="desc"><strong>Forfait</strong></td></tr>
						<tr><td class="desc">15 séances + 1 offerte</td></tr>
						<tr><td class="desc">Prix de la séance: 50 €</td></tr>
					</table>
					</p>
				</div>
				<div class="soins_tabs right">
					<p>
						<p class="nouveaute">
							<img class="img_nouveaute" src="images/lpg.jpg"/>
						</p>
					</p>
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