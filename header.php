<?php
echo '
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>

		<!-- Placez cette balise dans l\'en-tête ou juste avant la balise de fermeture du corps de texte. -->
		<script src="https://apis.google.com/js/platform.js" async defer>
			{lang: \'fr\'}
		</script>
		<header>
			<h1>CYBEL</h1>
			<h2>Institut de Beauté</h2>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="soins_du_visage.php">Soins</a></li>
					<li><a href="accessoires_parfumerie.php">Accessoires & Parfumerie</a></li>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</nav>
		</header>
		';
?>