<?php
// General php variables
$page = 'bilder';
$keywords = 'Bilder, Zimmer, Terrasse';
$descriptionText = 'Bilder Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Bilder - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'pictures.php';
$addLeaflet = false;
$addJQuery = true;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require 'head.php';?>
<script type="text/javascript" src="/js/zoomEffect.js" async></script>
</head>

<body>
	<!-- Navigation bar -->
<?php require 'navBar.php';?>

	<!-- Main content -->
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
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/outside_view_2.jpg">
    					<img src="/pictures/medium/outside_view_2.jpg" alt="Chalet Blick" />
					</picture>
					<figcaption>Das Chalet.</figcaption>
				</figure>
			</div>
		</section>

		<section class="section-separator">
			<header>
				<h3>Wohnung 1</h3>
			</header>

			<section>
				<header>
					<h4>Das Wohnzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_1.jpg">
    						<img src="/pictures/medium/a1_livingroom_1.jpg"	alt="Wohnzimmer, Blick 1" />
    					</picture>
						<figcaption>Wohnzimmer, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_2.jpg">
    						<img src="/pictures/medium/a1_livingroom_2.jpg"	alt="Wohnzimmer, Blick 2" />
    					</picture>
						<figcaption>Wohnzimmer, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_3.jpg">
    						<img src="/pictures/medium/a1_livingroom_3.jpg"	alt="Wohnzimmer, Blick 3" />
    					</picture>
						<figcaption>Wohnzimmer, Blick 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_4.jpg">
    						<img src="/pictures/medium/a1_livingroom_4.jpg"	alt="Wohnzimmer, Blick 4" />
    					</picture>
						<figcaption>Wohnzimmer, Blick 4.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Schlafzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom1_1.jpg">
    						<img src="/pictures/medium/a1_bedroom1_1.jpg" alt="Schlafzimmer 1, Blick 1" />
    					</picture>
						<figcaption>Schlafzimmer 1, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom1_2.jpg">
    						<img src="/pictures/medium/a1_bedroom1_2.jpg" alt="Schlafzimmer 1, Blick 2" />
    					</picture>
						<figcaption>Schlafzimmer 1, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom1_3.jpg">
    						<img src="/pictures/medium/a1_bedroom1_3.jpg" alt="Schlafzimmer 1, Toilette Blick" />
    					</picture>
						<figcaption>Schlafzimmer 1, Toilette.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom2.jpg">
    						<img src="/pictures/medium/a1_bedroom2.jpg"	alt="Schlafzimmer 2 Blick" />
    					</picture>
						<figcaption>Schlafzimmer 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom3_2.jpg">
    						<img src="/pictures/medium/a1_bedroom3_2.jpg" alt="Schlafzimmer 3, Blick 1" />
    					</picture>
						<figcaption>Schlafzimmer 3, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom3_3.jpg">
    						<img src="/pictures/medium/a1_bedroom3_3.jpg" alt="Schlafzimmer 3, Blick 2" />
    					</picture>
						<figcaption>Schlafzimmer 3, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom_terrace_1.jpg">
    						<img src="/pictures/medium/a1_bedroom_terrace_1.jpg" alt="Terrasse von Schlafzimmer 1 und 2, Blick 1" />
    					</picture>
						<figcaption>Terrasse von Schlafzimmer 1 und 2, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom_terrace_2.jpg">
    						<img src="/pictures/medium/a1_bedroom_terrace_2.jpg" alt="Terrasse von Schlafzimmer 1 und 2, Blick 2" />
    					</picture>
						<figcaption>Terrasse von Schlafzimmer 1 und 2, Blick 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Sauna</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_sauna_1.jpg">
    						<img src="/pictures/medium/a1_sauna_1.jpg" alt="Sauna, Blick 1" />
						</picture>
						<figcaption>Sauna, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_sauna_2.jpg">
    						<img src="/pictures/medium/a1_sauna_2.jpg" alt="Sauna, Blick 2" />
						</picture>
						<figcaption>Sauna, Blick 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Terrasse</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_1.jpg">
    						<img src="/pictures/medium/a1_terrace_1.jpg" alt="Terrasse, Blick 1" />
    					</picture>
						<figcaption>Terrasse, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_2.jpg">
    						<img src="/pictures/medium/a1_terrace_2.jpg" alt="Terrasse, Blick 2" />
    					</picture>
						<figcaption>Terrasse, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_3.jpg">
    						<img src="/pictures/medium/a1_terrace_3.jpg" alt="Terrasse, Blick 3" />
    					</picture>
						<figcaption>Terrasse, Blick 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_4.jpg">
    						<img src="/pictures/medium/a1_terrace_4.jpg" alt="Terrasse, Blick 4" />
    					</picture>
						<figcaption>Terrasse, Blick 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_5.jpg">
    						<img src="/pictures/medium/a1_terrace_5.jpg" alt="Terrasse, Blick 5" />
    					</picture>
						<figcaption>Terrasse, Blick 5.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_6.jpg">
    						<img src="/pictures/medium/a1_terrace_6.jpg" alt="Terrasse, Blick 6" />
    					</picture>
						<figcaption>Terrasse, Blick 6.</figcaption>
					</figure>
					<figure class="vertical-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_7.jpg">
    						<img src="/pictures/medium/a1_terrace_7.jpg" alt="Terrasse, Blick 7" />
    					</picture>
						<figcaption>Terrasse, Blick 7.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section class="section-separator">
			<header>
				<h3>Wohnung 2</h3>
			</header>

			<section>
				<header>
					<h4>Das Wohnzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_1.jpg">
    						<img src="/pictures/medium/a2_livingroom_1.jpg"	alt="Wohnzimmer, Blick 1" />
    					</picture>
						<figcaption>Wohnzimmer, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_4.jpg">
    						<img src="/pictures/medium/a2_livingroom_4.jpg"	alt="Wohnzimmer, Blick 2" />
    					</picture>
						<figcaption>Wohnzimmer, Blick 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Schlafzimmer</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_bedroom1.jpg">
    						<img src="/pictures/medium/a2_bedroom1.jpg"	alt="Schlafzimmer 1 Blick" />
    					</picture>
						<figcaption>Schlafzimmer 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_bedroom2_1.jpg">
    						<img src="/pictures/medium/a2_bedroom2_1.jpg" alt="Schlafzimmer 2 Blick" />
    					</picture>
						<figcaption>Schlafzimmer 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_toilet.jpg">
    						<img src="/pictures/medium/a2_toilet.jpg" alt="Bad Blick" />
						</picture>
						<figcaption>Bad.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>Die Terrasse</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_2.jpg">
    						<img src="/pictures/medium/a2_terrace_2.jpg" alt="Terrasse, Blick 1" />
    					</picture>
						<figcaption>Terrasse, Blick 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_4.jpg">
    						<img src="/pictures/medium/a2_terrace_4.jpg" alt="Terrasse, Blick 2" />
    					</picture>
						<figcaption>Terrasse, Blick 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_5.jpg">
    						<img src="/pictures/medium/a2_terrace_5.jpg" alt="Terrasse, Blick 3" />
    					</picture>
						<figcaption>Terrasse, Blick 3.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section class="section-separator">
			<header>
				<h3>Aussicht von den Terrassen</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_2.jpg">
    					<img src="/pictures/medium/mountains_2.jpg" alt="Berge, Blick 1" />
					</picture>
					<figcaption>Berge, Blick 1.</figcaption>
				</figure>
				<figure class="vertical-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_3.jpg">
    					<img src="/pictures/medium/mountains_3.jpg" alt="Berge, Blick 2" />
					</picture>
					<figcaption>Berge, Blick 2.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_6.jpg">
    					<img src="/pictures/medium/mountains_6.jpg" alt="Berge, Blick 3" />
					</picture>
					<figcaption>Berge, Blick 3.</figcaption>
				</figure>
			</div>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>