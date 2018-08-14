<?php
	// General php variables
	$page = 'home';
	$homeDir = '';
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, Ferienwohnung, Index, Startseite">
<meta name="description" content="Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="en" href="https://www.chalet-hohewarte.com/en/">

<title>Chalet Hohe Warte</title>

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>../css/styles.css" />

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
		<header>
			<h1>NATIONALPARK CHALETS</h1>
			<h1>Chalet Hohe Warte</h1>
		</header>

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
	</div>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>
</body>
</html>