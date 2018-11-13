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

		<p>Das Chalet ist unterteilt in zwei Wohnungen mit getrennten Eingängen. Platz ist für 12 Personen in 5 Schlafräumen
			mit 4 Bädern und einem separaten WC. Daneben gibt es 2 Wohnbereiche mit Wohnraum, Essbereich und Küche.</p>

		<section>
			<header>
				<h3>Das ganze Chalet</h3>
			</header>

			<p>Hier gehört Ihnen das ganze Haus!</p>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
				target="_blank" rel="noopener"><strong>Reservieren Sie bei Chaletsplus.com</strong></a>
		</section>

		<section>
			<header>
				<h3>Wohnung 1</h3>
			</header>

			<p>Es gibt Platz für maximal 8 Personen in 3 Schlafzimmern und 3 Bädern. Die Sauna, als auch der überdachte Freisitz
				mit Heizstrahlern , sowie Balkon und Terrasse gehören zu diesem größeren Teil des Hauses. Außerdem ein beheizter
				Skistall und 2 überdachte Carportplätze direkt vor der Haustüre.</p>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/zillertal-arena/wildkogel-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-2-694.html"
				target="_blank" rel="noopener"><strong>Reservieren Sie bei Chaletsplus.com</strong></a>
		</section>

		<section>
			<header>
				<h3>Wohnung 2</h3>
			</header>

			<p>Das ist die kleinere Einheit für 4 Personen mit 2 Schlafzimmern, Küche, Wohn- und Essbereich, sowie einem Bad mit
				Badewanne. Vor der Türe gibt es einen großzügigen Freisitz mit einem herrlichen Blick auf den Grossvenediger. Oben
				ist der Skistall und ein Parkplatz.</p>

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