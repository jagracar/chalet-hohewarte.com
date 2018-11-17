<?php
// General php variables
$page = 'aktivitaeten';
$keywords = 'Aktivitäten, Sommer, Winter';
$descriptionText = 'Aktivitäten Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Aktivitäten - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'activities.php';
$addLeaflet = true;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="de">
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
			<h2>Aktivitäten</h2>
		</header>

		<section>
			<header>
				<h3>Winter</h3>
			</header>

			<p>
				Ab 2019 entsteht auf dem Gelände ein Schlepplift und Sie haben Anschluss an das Skigebiet der <a
					href="https://www.wildkogel-arena.at" target="_blank" rel="noopener">Wildkogel-Arena</a>. Dieses Skigebiet mit
				insgesamt <a href="https://www.wildkogel-arena.at/de/winterurlaub-skigebiet-wildkogel-arena-lifte-pisten"
					target="_blank" rel="noopener">75 km Pisten</a> ist besonders ideal für Familien aber auch für alle anderen.
			</p>

			<p>
				In der Nachbarschaft liegt die schneesichere <a href="https://www.zillertalarena.com/de" target="_blank"
					rel="noopener">Zillertal Arena</a> mit über 143 km Pisten.
			</p>

			<p>
				In 10 Minuten erreichen Sie außerdem den Einstieg in das berühmte <a href="https://www.kitzski.at" target="_blank"
					rel="noopener">Kitzbüheler Skigebiet</a>, das bereits mehrmals zum besten Skigebiet der Welt (!) gewählt wurde.
				Dort gibt es 179 km Pisten in allen Schwierigkeitsgraden und gemütliche Hütten zum einkehren. 
			</p>

			<p>
				Vom Wildkogel können Sie auf der 14 km langen beleuchteten <a
					href="https://www.wildkogel-arena.at/de/winterurlaub-aktivitaeten-rodeln" target="_blank" rel="noopener">Rodelbahn</a>
				nach Bramberg rodeln. Ein unvergessliches Ferienerlebnis!
			</p>

			<p>Freilich ist es in unserem wunderbaren Gebiet auch möglich Skilanglauf zu machen, Skitouren, sowie Schneeschuh –
				und andere Wanderungen.</p>

			<figure>
				<div id="winter-map-container" class="map-container"></div>
			</figure>
		</section>

		<section>
			<header>
				<h3>Sommer</h3>
			</header>

			<p>
				Der <a href="https://hohetauern.at/de">Nationalpark Hohe Tauern</a> ist ein großes Schutzgebiet im Alpenraum. Es
				erstreckt sich über weite alpine Landschaften und Gletscher sowie imposante Felswände.​ Viele Aktivitäten bieten
				sich an.
			</p>

			<p>
				Zuerst denkt man gewiss an unzählige <a
					href="http://alpregio.outdooractive.com/ar-wildkogel-arena/de/alpregio.jsp#activ=Wandern&tab=ToursTab"
					target="_blank" rel="noopener">Bergtouren und Wanderungen</a> in allen Schwierigkeitsgraden, aber auch das Biken,
				z.B. mit dem E-Bike, findet immer mehr Freunde auf über 1000 km <a
					href="http://alpregio.outdooractive.com/ar-wildkogel-arena/de/alpregio.jsp#activ=Radfahren&tab=ToursTab"
					target="_blank" rel="noopener">Rad- und Mountainbikerouten</a>.
			</p>

			<p>
				In weniger als einer 3/4 Stunden erreicht man 5 wunderschöne Golfplätze, der nächstgelegene in <a
					href="https://www.golfclub-nationalpark-hohetauern.at" target="_blank" rel="noopener">Mittersill</a> in 18 km
				Entfernung.
			</p>

			<p>
				Berühmt in der Region sind die <a href="http://www.wasserfaelle-krimml.at" target="_blank" rel="noopener">Krimmler
					Wasserfälle</a>, wie auch die traumhafte <a
					href="https://www.grossglockner.at/gg/de/hochalpenstrasse/diehochalpenstrasse" target="_blank" rel="noopener">Hochalpenstraße</a>
				zum Großglockner.
			</p>

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