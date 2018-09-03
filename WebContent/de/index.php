<?php
// General php variables
$homeDir = '../';
$picturesDir = '../pictures/';
$page = 'home';
$keywords = 'Index, Startseite';
$descriptionText = 'Startseite Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = '';
$addLeaflet = false;
$addJQuery = true;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include_once 'head.php';?>
<script src="<?php echo $homeDir;?>js/slideshowAnimation.js" async></script>
</head>

<body>
	<!-- Navigation bar -->
<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Chalet Hohe Warte</h2>
		</header>

		<figure>
			<div class="slideshow-container">
				<picture>
					<source media="(max-width: 480px)" srcset="<?php echo $picturesDir;?>medium/a1_terrace_2.jpg">
    				<img src="<?php echo $picturesDir;?>large/a1_terrace_2.jpg"> 
    			</picture>
 				<picture>
					<source media="(max-width: 480px)" srcset="<?php echo $picturesDir;?>medium/a1_livingroom_1.jpg">
    				<img src="<?php echo $picturesDir;?>large/a1_livingroom_1.jpg">
    			</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="<?php echo $picturesDir;?>medium/a1_bedroom_terrace_1.jpg">
	    			<img src="<?php echo $picturesDir;?>large/a1_bedroom_terrace_1.jpg"> 
    			</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="<?php echo $picturesDir;?>medium/a1_livingroom_4.jpg">
	    			<img src="<?php echo $picturesDir;?>large/a1_livingroom_4.jpg">
    			</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="<?php echo $picturesDir;?>medium/a1_terrace_5.jpg">
	     			<img src="<?php echo $picturesDir;?>large/a1_terrace_5.jpg"> 
    			</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="<?php echo $picturesDir;?>medium/mountains_2.jpg">
	     			<img src="<?php echo $picturesDir;?>large/mountains_2.jpg"> 
    			</picture>
			</div>
		</figure>

		<p>Das Alpenchalet Hohe Warte liegt im Chaletdorf Nationalpark am
			Südhang des Rossbergs in Neukirchen am Großvenediger. Dort können Sie
			ganzjährig auf Ihrer Terrasse die Sonne genießen. Vom Chalet haben
			Sie eine herrliche Aussicht auf die vielen Gipfel des Nationalparks
			Hohe Tauern. Das malerische Zentrum von Neukirchen befindet sich in
			einer Entfernung von etwa 10 Minuten zu Fuß.</p>

		<p>Im Zentrum des Chaletdorfs werden eine Rezeption, ein Restaurant,
			eine Bar, ein kleiner Supermarkt, ein Sportgeschäft und eine
			Skischule realisiert. Auch für die kleinen Gäste gibt es
			Unterhaltung.</p>

		<p>Was bietet Ihnen das Chaletdorf:</p>
		<ul>
			<li>All-inclusive-Service, Reinigung, Bettwäsche, Handtücher
				und Brötchenservice</li>
			<li>Rezeption, Restaurant und Bar</li>
			<li>Spiel- und Grillplatz </li>
			<li>Schwimmen im Naturteich</li>
			<li>Ski- und Fahrradverleih</li>
			<li>Skipiste mit eigenem Skilift und direkter Anbindung an die
				Wildkogel-Arena (Ski-in Ski-out, 170m zu Fuß zur Piste)</li>
		</ul>
	</article>
	</main>

	<!-- Footer -->
<?php include_once 'footer.php';?>

</body>
</html>