<?php
// General php variables
$page = 'reservations';
$keywords = 'price';
$descriptionText = 'Reservations of Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Reservations - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'buchen.php';
$addLeaflet = false;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="en">
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
			<h2>Reservations</h2>
		</header>

		<section>
			<header>
				<h3>The whole Chalet</h3>
			</header>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/en/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
				target="_blank" rel="noopener"><strong>Reverve at Chaletsplus.com</strong></a>
		</section>

		<section>
			<header>
				<h3>Apartment 1</h3>
			</header>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/en/chalet/neukirchen-am-grossvenediger/zillertal-arena/wildkogel-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-2-694.html"
				target="_blank" rel="noopener"><strong>Reverve at Chaletsplus.com</strong></a>
		</section>

		<section>
			<header>
				<h3>Apartment 2</h3>
			</header>

			<a class="reservation-link"
				href="https://www.chaletsplus.com/en/chalet/neukirchen-am-grossvenediger/zillertal-arena/wildkogel-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-1-693.html"
				target="_blank" rel="noopener"><strong>Reverve at Chaletsplus.com</strong></a>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>