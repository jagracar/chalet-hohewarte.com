<?php
// General php variables
$page = 'home';
$keywords = 'index, home page';
$descriptionText = 'Home page of Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = '';
$addLeaflet = false;
$addJQuery = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'head.php';?>
<script type="text/javascript" src="/js/slideshowAnimation.js" async></script>
</head>

<body>
	<!-- Navigation bar -->
<?php require 'navBar.php';?>

	<!-- Main content -->
	<main class="main-container">
	<article class="content">
		<header>
			<h2>Chalet Hohe Warte</h2>
		</header>

		<figure>
			<div class="slideshow-container">
				<picture>
					<source media="(max-width: 480px)" srcset="/pictures/medium/a1_terrace_2.jpg">
					<img src="/pictures/large/a1_terrace_2.jpg">
				</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="/pictures/medium/front_image_1.jpg">
					<img src="/pictures/large/front_image_1.jpg">
				</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="/pictures/medium/a1_terrace_10.jpg">
					<img src="/pictures/large/a1_terrace_10.jpg">
				</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="/pictures/medium/a1_livingroom_8.jpg">
					<img src="/pictures/large/a1_livingroom_8.jpg">
				</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="/pictures/medium/a1_terrace_12.jpg">
					<img src="/pictures/large/a1_terrace_12.jpg">
				</picture>
				<picture>
					<source media="(max-width: 480px)" srcset="/pictures/medium/front_image_3.jpg">
					<img src="/pictures/large/front_image_3.jpg">
				</picture>
			</div>
		</figure>

		<p>Das Alpenchalet Hohe Warte ist eines der Nationalpark Chalets am Südhang des Rossbergs in Neukirchen am
			Großvenediger. Dort können Sie ganzjährig auf einer der beiden Terrassen die Sonne genießen. Vom Chalet haben Sie
			eine atemberaubende Aussicht auf die Berge des Nationalparks Hohe Tauern, darunter der Großvenediger mit seinem 3657m
			hohen und stets schneedeckten Gipfel. Das malerische Zentrum von Neukirchen befindet sich in einer Entfernung von
			etwa 10 Minuten zu Fuß.</p>

		<p>
			Das Chalet bietet Ihnen einen all-inclusive-Service mit Reinigung, Bettwäsche, Handtüchern und Brötchenservice. Im
			Sommer können Sie sich nach dem Wandern/Fahrradfahren oder im Winter nach dem Skifahren/Langlaufen auf unseren beiden
			Terrassen mit zahlreichen Sitz- und Liegemöglichkeiten, in der Sauna oder am Kamin garantiert erholen. Zur luxuriösen
			Ausstattung unseres Chalets lesen Sie gerne weiter in der <a href="description.php">Beschreibung</a>.
		</p>

		<p>Bei Ihrer Anreise werden Sie Im Zentrum des Chaletdorfs an der Rezeption herzlich empfangen! Wenden Sie sich bei
			Fragen oder für Tipps jeder Art gerne an die dortigen, sehr freundlichen Mitarbeiter.</p>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>