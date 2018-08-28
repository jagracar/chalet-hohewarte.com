<?php
// General php variables
$homeDir = '../';
$page = 'description';
$keywords = 'description';
$descriptionText = 'Description of Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Description - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'beschreibung.php';
$addLeaflet = false;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php';?>

<body>
	<!-- Navigation bar -->
<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Description</h2>
		</header>

		<section>
			<h3>Skiraum im Chalet</h3>

			<p>Ein beheizter Skiraum mit Schuhtrockner ermöglicht bequemes
				Anziehen und Trocknen der Sportausrüstung.</p>
		</section>

		<section>
			<h3>Waschküche</h3>

			<p>Waschmaschine, Trockner, Bügelbrett mit Bügeleisen und
				Wäscheständer.</p>
		</section>

		<section>
			<h3>Terrasse und Balkon</h3>

			<p>Großzügiger Balkon und Sonnenterrasse mit unverbautem Blick auf
				die Bergwelt.</p>
		</section>

		<section>
			<h3>Freisitz</h3>

			<p>Beheizbarer Freisitz mit Grillmöglichkeit für gemütliches
				Beisammensein.</p>
		</section>

		<section>
			<h3>Extras</h3>

			<ul>
				<li>Handtücher vorhanden</li>
				<li>Betten bezogen</li>
				<li>Kaminholz verfügbar</li>
				<li>Haustiere nicht erlaubt</li>
				<li>Familienfreundlich (Hochstuhl, Kinderbett, usw.)</li>
			</ul>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php include_once 'footer.php';?>

</body>
</html>