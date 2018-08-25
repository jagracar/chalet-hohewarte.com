<?php
	// General php variables
	$page = 'kontakt';
	$homeDir = '../';
	$alternative = 'contact.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, Ferienwohnung, Kontakt, Adresse, Telefon">
<meta name="description" content="Kontakt Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="en" href="https://chalet-hohewarte.com/en/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>css/styles.css">
<link rel="stylesheet" href="<?php echo $homeDir;?>css/leaflet/leaflet.css">

<title>Kontakt - Chalet Hohe Warte</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Kontakt</h2>
		</header>

		<p>Das Chalet befindet sich in einer idyllischen Umgebung mit freiem Blick auf die
		Gletscher der Hohen Tauern am Südhang der Kitzbühler Alpen in Neukirchen am Großvenediger
		(Oberpinzgau, Salzburger Land). Es ist gemütlich im Stil Alpin modern eingerichtet und
		verfügt auf 170 qm über 5 Schlafzimmer, 4 Bäder, 2 Küchen, Sauna, Skistall und beheizter
		Freisitz für bis zu 12 Personen. Mit Parkmöglichkeit für 3 PKW.</p>

		<figure>
			<div id="contact-map-container" class="map-container"></div>
			<script src="<?php echo $homeDir;?>js/leaflet.js"></script>
			<script src="<?php echo $homeDir;?>js/location-map.js"></script>
			<script>addMapToDiv("contact-map-container", "");</script>
		</figure>

		<section>
    		<h3>Entfernung Städte und Dörfer ab Neukirchen</h3>
    		
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
		
		<section>
    		<h3>Verkehr ab Neukirchen</h3>
    		
    		<p>Flughafen:</p>
        	<ul>
        		<li>Innsbruck (ca. 107 km)</li>
        		<li>Salzburg (ca. 138 km)</li>
        		<li>München (ca. 229 km)</li>
        	</ul>

    		<p>Bahnhof:</p>
        	<ul>
        		<li>Neukirchen am Großvenediger (in unmittelbarer Nähe des Zentrums)</li>
        		<li>Wald im Pinzgau (etwa 5 km)</li>
        		<li>Mittersill (etwa 18 km)</li>
        	</ul>
    	</section>
	</article>
	</main>

	<!-- Footer -->
	<?php include_once 'footer.php';?>

</body>
</html>