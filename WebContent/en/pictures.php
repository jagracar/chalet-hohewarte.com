<?php
// General php variables
$homeDir = '../';
$page = 'pictures';
$keywords = 'pictures, rooms, terrace';
$descriptionText = 'Pictures of Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Pictures - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'bilder.php';
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
			<h2>Pictures</h2>
		</header>

		<section>
			<header>
				<h3>The Chalet</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/outside_view.jpg"
						alt="Chalet view" />
					<figcaption>The Chalet.</figcaption>
				</figure>
			</div>
		</section>

		<section>
			<header>
				<h3>Apartment 1</h3>
			</header>

			<figure>
				<figcaption>
					<h4>The living room</h4>
				</figcaption>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_1.jpg"
							alt="Living room, view 1" />
						<figcaption>Living room, view 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_2.jpg"
							alt="Living room, view 2" />
						<figcaption>Living room, view 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_3.jpg"
							alt="Living room, view 3" />
						<figcaption>Living room, view 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_livingroom_4.jpg"
							alt="Living room, view 4" />
						<figcaption>Living room, view 4.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_sauna.jpg"
							alt="Sauna view" />
						<figcaption>Sauna.</figcaption>
					</figure>
				</div>
			</figure>

			<figure>
				<figcaption>
					<h4>The bedrooms</h4>
				</figcaption>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom1.jpg"
							alt="Bedroom 1 view" />
						<figcaption>Bedroom 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom2.jpg"
							alt="Bedroom 2 view" />
						<figcaption>Bedroom 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom_terrace_1.jpg"
							alt="Terrace from bedrooms 1 and 2, view 1" />
						<figcaption>Terrace from bedrooms 1 and 2, view 1.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom_terrace_2.jpg"
							alt="Terrace from bedrooms 1 and 2, view 2" />
						<figcaption>Terrace from bedrooms 1 and 2, view 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_1.jpg"
							alt="Bedroom 3, view 1" />
						<figcaption>Bedroom 3, view 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_2.jpg"
							alt="Bedroom 3, view 2" />
						<figcaption>Bedroom 3, view 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_3.jpg"
							alt="Bedroom 3, view 3" />
						<figcaption>Bedroom 3, view 3.</figcaption>
					</figure>
				</div>
			</figure>

			<figure>
				<figcaption>
					<h4>The terrace</h4>
				</figcaption>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_1.jpg"
							alt="Terrace, view 1" />
						<figcaption>Terrace, view 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_2.jpg"
							alt="Terrace, view 2" />
						<figcaption>Terrace, view 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_3.jpg"
							alt="Terrace, view 3" />
						<figcaption>Terrace, view 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_4.jpg"
							alt="Terrace, view 4" />
						<figcaption>Terrace, view 4.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_5.jpg"
							alt="Terrace, view 5" />
						<figcaption>Terrace, view 5.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_6.jpg"
							alt="Terrace, view 6" />
						<figcaption>Terrace, view 6.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a1_terrace_7.jpg"
							alt="Terrace, view 7" />
						<figcaption>Terrace, view 7.</figcaption>
					</figure>
				</div>
			</figure>
		</section>

		<section>
			<header>
				<h3>Apartment 2</h3>
			</header>

			<figure>
				<figcaption>
					<h4>The living room</h4>
				</figcaption>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_livingroom.jpg"
							alt="Living room view" />
						<figcaption>Living room.</figcaption>
					</figure>
				</div>
			</figure>

			<figure>
				<figcaption>
					<h4>The bedrooms</h4>
				</figcaption>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_bedroom1.jpg"
							alt="Bedroom 1 view" />
						<figcaption>Bedroom 1.</figcaption>
					</figure>
				</div>
			</figure>

			<figure>
				<figcaption>
					<h4>The terrace</h4>
				</figcaption>

				<div class="pictures-container">
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_1.jpg"
							alt="Terrace, view 1" />
						<figcaption>Terrace, view 1.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_2.jpg"
							alt="Terrace, view 2" />
						<figcaption>Terrace, view 2.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_3.jpg"
							alt="Terrace, view 3" />
						<figcaption>Terrace, view 3.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_4.jpg"
							alt="Terrace, view 4" />
						<figcaption>Terrace, view 4.</figcaption>
					</figure>
					<figure class="horizontal-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_5.jpg"
							alt="Terrace, view 5" />
						<figcaption>Terrace, view 5.</figcaption>
					</figure>
					<figure class="vertical-picture">
						<img src="<?php echo $homeDir;?>pictures/a2_terrace_6.jpg"
							alt="Terrace, view 6" />
						<figcaption>Terrace, view 6.</figcaption>
					</figure>
				</div>
			</figure>
		</section>

		<section>
			<header>
				<h3>Views from the terrace</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_1.jpg"
						alt="Mountains, view 1" />
					<figcaption>Mountains, view 1.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_2.jpg"
						alt="Mountains, view 2" />
					<figcaption>Mountains, view 2.</figcaption>
				</figure>
				<figure class="vertical-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_3.jpg"
						alt="Mountains, view 3" />
					<figcaption>Mountains, view 3.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_4.jpg"
						alt="Mountains, view 4" />
					<figcaption>Mountains, view 4.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_5.jpg"
						alt="Mountains, view 5" />
					<figcaption>Mountains, view 5.</figcaption>
				</figure>
				<figure class="horizontal-picture">
					<img src="<?php echo $homeDir;?>pictures/mountains_6.jpg"
						alt="Mountains, view 6" />
					<figcaption>Mountains, view 6.</figcaption>
				</figure>
			</div>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php include_once 'footer.php';?>

</body>
</html>