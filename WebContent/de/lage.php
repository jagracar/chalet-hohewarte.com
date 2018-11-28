<?php
// General php variables
$page = 'lage';
$keywords = 'Lage, Kontakt, Adresse, Telefon';
$descriptionText = 'Lage Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Lage - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'location.php';
$addLeaflet = true;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require 'head.php';?>
<script type="text/javascript" src="/js/location-map.js" async></script>
</head>

<body>
	<!-- Navigation bar -->
<?php require 'navBar.php';?>

	<!-- Main content -->
	<main class="main-container">
	<article class="content">
		<header>
			<h2>Lage</h2>
		</header>

		<figure>
			<div id="contact-map-container" class="map-container"></div>
			<script>
    				window.onload = function() {
    					addMapToDiv("contact-map-container", "");
    				};
    		</script>
		</figure>

		<section>
			<header>
				<h3>Entfernung Städte und Dörfer ab Neukirchen</h3>
			</header>

			<ul>
				<li>Bramberg etwa 5 km.</li>
				<li>Wald im Pinzgau etwa 10 km.</li>
				<li>Hochkrimml etwa 20 km.</li>
				<li>Zell am See etwa 45 km.</li>
				<li>Innsbruck etwa 100 km.</li>
				<li>Salzburg etwa 120 km.</li>
				<li>Die Entfernung von München nach Neukirchen ist etwa 190 km.</li>
			</ul>
		</section>

		<section class="section-separator">
			<header>
				<h3>Verkehr ab Neukirchen</h3>
			</header>

			<h4>Flughäfen</h4>
			<ul>
				<li>Innsbruck (ca. 107 km).</li>
				<li>Salzburg (ca. 138 km).</li>
				<li>München (ca. 229 km).</li>
			</ul>

			<h4>Bahnhöfe</h4>
			<ul>
				<li>Neukirchen am Großvenediger (in unmittelbarer Nähe des Zentrums).</li>
				<li>Wald im Pinzgau (etwa 5 km).</li>
				<li>Mittersill (etwa 18 km).</li>
			</ul>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>