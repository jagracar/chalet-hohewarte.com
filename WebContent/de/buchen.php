<?php
// General php variables
$page = 'buchen';
$keywords = 'Buchen, Preis';
$descriptionText = 'Buchen Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Jetz buchen! - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'reservations.php';
$addLeaflet = false;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require 'head.php';?>
</head>

<body>
	<!-- Navigation bar -->
<?php require 'navBar.php';?>

	<!-- Main content -->
	<main class="main-container">
	<article class="content">
		<header>
			<h2>Buchen</h2>
		</header>

		<section>
			<header>
				<h3>Das ganze Chalet</h3>
			</header>

			<p>Hier gehört Ihnen das ganze Haus! Max. 12 Personen können in 5 Schlafzimmern komfortabel übernachten.</p>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
				target="_blank" rel="noopener"><strong>Reservieren Sie bei Chaletsplus.com</strong></a>
		</section>

		<section class="section-separator">
			<header>
				<h3>Wohnung 1</h3>
			</header>

			<p>Es gibt Platz für max. 8 Personen in 3 Schlafzimmern.</p>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/zillertal-arena/wildkogel-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-2-694.html"
				target="_blank" rel="noopener"><strong>Reservieren Sie bei Chaletsplus.com</strong></a>
		</section>

		<section class="section-separator">
			<header>
				<h3>Wohnung 2</h3>
			</header>

			<p>Hier kommen Sie mit max. 4 Personen in 2 Schlafzimmern unter.</p>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/zillertal-arena/wildkogel-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-1-693.html"
				target="_blank" rel="noopener"><strong>Reservieren Sie bei Chaletsplus.com</strong></a>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>