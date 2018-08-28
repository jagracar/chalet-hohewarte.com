<?php
	// General php variables
	$page = 'home';
	$homeDir = '../';
	$alternative = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Neukirchen am Großvenediger, holiday house, index, home page">
<meta name="description" content="Home page Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="icon" type="image/png" href="<?php echo $homeDir;?>favicon.png">
<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>css/styles.css">

<title>Chalet Hohe Warte in Neukirchen am Großvenediger</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Chalet Hohe Warte</h2>
		</header>

		<h3>Nationalpark Chalets</h3>

		<p>Das Alpenchalet Hohe Warte liegt im Chaletdorf Nationalpark am Südhang des Rossbergs
		in Neukirchen am Großvenediger. Dort können Sie ganzjährig auf Ihrer Terrasse die Sonne genießen. 
		Vom Chalet haben Sie eine herrliche Aussicht auf die vielen Gipfel des Nationalparks Hohe Tauern.
		Das malerische Zentrum von Neukirchen befindet sich in einer Entfernung von etwa 10 Minuten zu Fuß.</p>

		<p>Im Zentrum des Chaletdorfs werden eine Rezeption, ein Restaurant, eine Bar, ein kleiner Supermarkt, 
		ein Sportgeschäft und eine Skischule realisiert. Auch für die kleinen Gäste gibt es Unterhaltung.</p>

		<p>Was bietet Ihnen das Chaletdorf:
    	<ul>
    		<li>All-inclusive-Service, Reinigung, Bettwäsche, Handtücher und Brötchenservice</li>
			<li>Rezeption, Restaurant und Bar</li>
			<li>Spiel- und Grillplatz </li>
			<li>Schwimmen im Naturteich</li>
			<li>Ski- und Fahrradverleih</li>
			<li>Skipiste mit eigenem Skilift und direkter Anbindung an die Wildkogel-Arena (Ski-in Ski-out, 170m zu Fuß zur Piste)</li>
    	</ul>
	</article>
	</main>

	<!-- Footer -->
	<?php include_once 'footer.php';?>

</body>
</html>