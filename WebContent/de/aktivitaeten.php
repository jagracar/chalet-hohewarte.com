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
				Bequem mit dem Skibus oder dem Auto erreichen Sie das Skigebiet der <a href="https://www.wildkogel-arena.at"
					target="_blank" rel="noopener">Wildkogel-Arena</a> in 5 Minuten. Zu Fuß erreichen Sie eine Piste mit direkter
				Verbindung zur Wildkogel-Bahn in Neukirchen in knapp 200 Metern. Die Wildkogel-Arena mit insgesamt <a
					href="https://www.wildkogel-arena.at/de/winterurlaub-skigebiet-wildkogel-arena-lifte-pisten" target="_blank"
					rel="noopener">75 km Pisten</a> ist auch für Familien ideal geeignet. Die Errichtung eines Schlepplifts im
				Chaletdorf mit unmittelbarem Anschluss an das Skigebiet ist geplant und wird voraussichtlich 2019 realisiert werden.
			</p>

			<p>
				In 10 Kilometern erreichen Sie mit dem Skibus oder dem Auto in Hollersbach außerdem den Einstieg in das berühmte <a
					href="https://www.kitzski.at" target="_blank" rel="noopener">Kitzbüheler Skigebiet</a>, das bereits jährlich zum
				besten Skigebiet der Welt (!) gewählt wird. Dort gibt es 215 Abfahrtskilometer in allen Schwierigkeitsgraden, 54
				modernste Lifte &amp; Bahnen und gemütliche Hütten zum Einkehren.
			</p>

			<p>
				In der Nachbarschaft (15 Kilometer Entfernung) liegt außerdem die schneesichere <a
					href="https://www.zillertalarena.com/de" target="_blank" rel="noopener">Zillertal Arena</a> mit über 143 km Pisten
				und 52 Liften und Bahnen.
			</p>

			<p>
				Für noch mehr Abwechslung sorgt ein Besuch in dem mit 338 Abfahrtskilometern größten Skigebiet Österreichs in <a
					href="https://www.schmitten.at/de" target="_blank" rel="noopener">Schmittenhöhe Zell am See</a> / <a
					href="https://www.saalbach.com/" target="_blank" rel="noopener">Saalbach-Hinterglemm</a> oder in der <a
					href="https://www.gletscherwelt-weissee.at/de/" target="_blank" rel="noopener">Weißsee-Gletscherwelt</a> und dem <a
					href="https://www.kitzsteinhorn.at/de" target="_blank" rel="noopener">Kitzsteinhorn</a> Gletscherskigebiet.
			</p>

			<p>
				Vom Wildkogel aus können Sie auf der 14 km langen, beleuchteten <a
					href="https://www.wildkogel-arena.at/de/winterurlaub-aktivitaeten-rodeln" target="_blank" rel="noopener">Rodelbahn</a>
				nach Bramberg rodeln. Ein unvergessliches Ferienerlebnis!
			</p>

			<p>
				Ebenfalls möglich in unserer Region Nationalpark Hohe Tauern sind auch <a
					href="https://www.wildkogel-arena.at/de/winterurlaub-aktivitaeten-langlaufen" target="_blank" rel="noopener">Skilanglauf</a>,
				<a href="https://www.wildkogel-arena.at/de/winterurlaub-aktivitaeten-skitouren" target="_blank" rel="noopener">Skitouren</a>,
				sowie <a href="https://www.wildkogel-arena.at/de/winterurlaub-winterwanderweg" target="_blank" rel="noopener">Schneeschuhwanderungen</a>.
				In der Wildkogel-Arena stehen 45 km präparierte und gespurte Langlaufloipen zur Verfügung.
			</p>

			<figure>
				<div id="winter-map-container" class="map-container"></div>
			</figure>
		</section>

		<section class="section-separator">
			<header>
				<h3>Sommer</h3>
			</header>

			<p>
				Der <a href="https://hohetauern.at/de" target="_blank" rel="noopener">Nationalpark Hohe Tauern</a> ist ein großes
				Schutzgebiet im Alpenraum. Er erstreckt sich über weite alpine Landschaften und Gletscher sowie imposante Felswände.
				Es bieten sich zahlreiche Aktivitäten an. Mit Ihrer Übernachtung in unserem Chalet erhalten Sie die <a
					href="https://www.nationalpark-sommercard.at/" target="_blank" rel="noopener">Sommercard</a> mit mehr als 60
				Leistungen von einem Tagesticket für die Großglockner Hochalpenstraße bis zu der kostenlosen Nutzung der Pinzgauer
				Lokalbahn oder der Bergbahnen und mit attraktiven Ermäßigungen für zahlreiche Erlebnisse.
			</p>

			<p>
				Sie können <a href="http://alpregio.outdooractive.com/ar-wildkogel-arena/de/alpregio.jsp#activ=Wandern&tab=ToursTab"
					target="_blank" rel="noopener">Bergtouren und Wanderungen</a> in allen Schwierigkeitsgraden unternehmen. Wanderer,
				Trekker und Bergsteiger finden im Nationalpark Hohe Tauern beste Bedingungen mit gut markierten Wegen und
				Alpinsteigen. Täglich gibt es geführte <a
					href="https://www.nationalpark.at/de/urlaub/sommer/wandern/das-wandergebiet/touren/" target="_blank" rel="noopener">Ganz-
					und Halbtagestouren</a> mit den Nationalparkrangern. In rund 120 Almen mit über 7.000 Pinzgauer Rindern werden
				Wanderer bewirtet und verwöhnt.
			</p>

			<p>
				Mit einem Streckennetz von über 1.000 Kilometern und 40.000 Höhenmetern inmitten einer herrlichen Naturkulisse
				bietet die Region aber auch <a
					href="https://www.nationalpark.at/de/urlaub/sommer/rad-bike/mountainbiking/mountainbike-touren/" target="_blank"
					rel="noopener">Bikern</a> alle Optionen von einer gemütlichen Familientour bis zu einer anspruchsvollen
				Hochgebirgstour mit Trailabfahrt.
			</p>

			<p>
				In weniger als einer 3/4 Stunden erreicht man 5 wunderschöne Golfplätze, der nächstgelegene in <a
					href="https://www.golfclub-nationalpark-hohetauern.at" target="_blank" rel="noopener">Mittersill</a> in 18 km
				Entfernung.
			</p>

			<p>
				Berühmt in der Region sind die <a href="http://www.wasserfaelle-krimml.at" target="_blank" rel="noopener">Krimmler
					Wasserfälle</a> und die traumhafte <a
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