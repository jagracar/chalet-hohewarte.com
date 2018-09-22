<?php
// General php variables
$page = 'activities';
$keywords = 'activities, summer, winter';
$descriptionText = 'Activities Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Activities - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'aktivitaeten.php';
$addLeaflet = true;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="en">
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
			<h2>Activities</h2>
		</header>

		<section>
			<h3>Winter</h3>

			<figure>
				<div id="winter-map-container" class="map-container"></div>
			</figure>
		</section>

		<section>
			<h3>Summer</h3>

			<figure>
				<div id="summer-map-container" class="map-container"></div>
			</figure>
		</section>

		<script>
				window.onload = function() {
					addMapToDiv("winter-map-container", "winter");
					addMapToDiv("summer-map-container", "summer");
				};
		</script>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>