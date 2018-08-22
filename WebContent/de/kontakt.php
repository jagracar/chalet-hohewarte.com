<?php
	// General php variables
	$page = 'kontakt';
	$homeDir = '';
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

<link rel="alternate" hreflang="en" href="https://chalet-hohewarte.com/en/<?php echo $alternative; ?>">

<title>Kontakt - Chalet Hohe Warte</title>

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir; ?>../css/styles.css" />

<!-- Useful JavaScript files -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!-- Navigation bar -->
	<?php include_once $homeDir . 'navBar.php';?>

	<div class="main-container">
		
	<div class="content">
		<header>
			<h1>Chalet Hohe Warte</h1>
		</header>

		<p>Das Chalet befindet sich in einer idyllischen Umgebung mit freiem Blick auf die
		Gletscher der Hohen Tauern am Südhang der Kitzbühler Alpen in Neukirchen am Großvenediger
		(Oberpinzgau, Salzburger Land). Es ist gemütlich im Stil Alpin modern eingerichtet und
		verfügt auf 170 qm über 5 Schlafzimmer, 4 Bäder, 2 Küchen, Sauna, Skistall und beheizter
		Freisitz für bis zu 12 Personen. Mit Parkmöglichkeit für 3 PKW.</p>

		<h1>Entfernung Städte und Dörfer ab Neukirchen</h1>
		
    	<ul>
    		<li>Bramberg etwa 5 km.</li>
    		<li>Wald im Pinzgau etwa 10 km.</li>
    		<li>Hochkrimml etwa 20 km.</li>
    		<li>Zell am See etwa 45 km.</li>
    		<li>Innsbruck etwa 100 km.</li>
    		<li>Salzburg etwa 120 km.</li>
    		<li>Die Entfernung von München nach Neukirchen ist etwa 190 km.</li>
    	</ul>
		
		<h1>Verkehr ab Neukirchen</h1>
		
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
	</div>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>

	</div>

</body>
</html>