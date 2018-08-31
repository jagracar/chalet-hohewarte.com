<?php
// General php variables
$homeDir = '../';
$page = 'bilder';
$keywords = 'Bilder, Zimmer, Terrasse';
$descriptionText = 'Bilder Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Bilder - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'pictures.php';
$addLeaflet = false;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include_once 'head.php';?>
</head>

<body>
	<!-- Navigation bar -->
<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Bilder</h2>
		</header>

		<section>
			<header>
				<h3>Das Chalet</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/outside_view.jpg"
						alt="Chalet Blick" />
					<figcaption>Das Chalet.</figcaption>
				</figure>
			</div>
		</section>

		<section>
			<header>
				<h3>Wohnung 1</h3>
			</header>

			<section>
				<header>
					<h4>Das Wohnzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_1.jpg"
							alt="Wohnzimmer, Blick 1" />
						<figcaption>Wohnzimmer, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_2.jpg"
							alt="Wohnzimmer, Blick 2" />
						<figcaption>Wohnzimmer, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_3.jpg"
							alt="Wohnzimmer, Blick 3" />
						<figcaption>Wohnzimmer, Blick 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_4.jpg"
							alt="Wohnzimmer, Blick 4" />
						<figcaption>Wohnzimmer, Blick 4.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_sauna.jpg"
							alt="Sauna Blick" />
						<figcaption>Sauna.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Schlafzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom1.jpg"
							alt="Schlafzimmer 1 Blick" />
						<figcaption>Schlafzimmer 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom2.jpg"
							alt="Schlafzimmer 2 Blick" />
						<figcaption>Schlafzimmer 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_1.jpg"
							alt="Schlafzimmer 3, Blick 1" />
						<figcaption>Schlafzimmer 3, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_2.jpg"
							alt="Schlafzimmer 3, Blick 2" />
						<figcaption>Schlafzimmer 3, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_3.jpg"
							alt="Schlafzimmer 3, Blick 3" />
						<figcaption>Schlafzimmer 3, Blick 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom_terrace_1.jpg"
							alt="Terrasse von Schlafzimmer 1 und 2, Blick 1" />
						<figcaption>Terrasse von Schlafzimmer 1 und 2, Blick 1.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom_terrace_2.jpg"
							alt="Terrasse von Schlafzimmer 1 und 2, Blick 2" />
						<figcaption>Terrasse von Schlafzimmer 1 und 2, Blick 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Terrasse</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_1.jpg"
							alt="Terrasse, Blick 1" />
						<figcaption>Terrasse, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_2.jpg"
							alt="Terrasse, Blick 2" />
						<figcaption>Terrasse, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_3.jpg"
							alt="Terrasse, Blick 3" />
						<figcaption>Terrasse, Blick 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_4.jpg"
							alt="Terrasse, Blick 4" />
						<figcaption>Terrasse, Blick 4.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_5.jpg"
							alt="Terrasse, Blick 5" />
						<figcaption>Terrasse, Blick 5.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_6.jpg"
							alt="Terrasse, Blick 6" />
						<figcaption>Terrasse, Blick 6.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_7.jpg"
							alt="Terrasse, Blick 7" />
						<figcaption>Terrasse, Blick 7.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_8.jpg"
							alt="Terrasse, Blick 8" />
						<figcaption>Terrasse, Blick 8.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section>
			<header>
				<h3>Wohnung 2</h3>
			</header>

			<section>
				<header>
					<h4>Das Wohnzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_livingroom_1.jpg"
							alt="Wohnzimmer, Blick 1" />
						<figcaption>Wohnzimmer, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_livingroom_2.jpg"
							alt="Wohnzimmer, Blick 2" />
						<figcaption>Wohnzimmer, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_livingroom_3.jpg"
							alt="Wohnzimmer, Blick 3" />
						<figcaption>Wohnzimmer, Blick 3.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Schlafzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_bedroom1.jpg"
							alt="Schlafzimmer 1 Blick" />
						<figcaption>Schlafzimmer 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_toilet.jpg"
							alt="Toilette Blick" />
						<figcaption>Toilette.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Terrasse</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_1.jpg"
							alt="Terrasse, Blick 1" />
						<figcaption>Terrasse, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_2.jpg"
							alt="Terrasse, Blick 2" />
						<figcaption>Terrasse, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_3.jpg"
							alt="Terrasse, Blick 3" />
						<figcaption>Terrasse, Blick 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_4.jpg"
							alt="Terrasse, Blick 4" />
						<figcaption>Terrasse, Blick 4.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_5.jpg"
							alt="Terrasse, Blick 5" />
						<figcaption>Terrasse, Blick 5.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_6.jpg"
							alt="Terrasse, Blick 6" />
						<figcaption>Terrasse, Blick 6.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section>
			<header>
				<h3>Aussicht von die Terrassen</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_1.jpg"
						alt="Berge, Blick 1" />
					<figcaption>Berge, Blick 1.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_2.jpg"
						alt="Berge, Blick 2" />
					<figcaption>Berge, Blick 2.</figcaption>
				</figure>
				<figure class="vertical-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_3.jpg"
						alt="Berge, Blick 3" />
					<figcaption>Berge, Blick 3.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_4.jpg"
						alt="Berge, Blick 4" />
					<figcaption>Berge, Blick 4.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_5.jpg"
						alt="Berge, Blick 5" />
					<figcaption>Berge, Blick 5.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_6.jpg"
						alt="Berge, Blick 6" />
					<figcaption>Berge, Blick 6.</figcaption>
				</figure>
			</div>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php include_once 'footer.php';?>

</body>
</html>