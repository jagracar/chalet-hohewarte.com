<?php
// General php variables
$page = 'pictures';
$keywords = 'pictures, rooms, terrace';
$descriptionText = 'Pictures of Chalet Hohe Warte in Neukirchen am Gro��venediger';
$titleText = 'Pictures - Chalet Hohe Warte in Neukirchen am Gro��venediger';
$alternative = 'bilder.php';
$addLeaflet = false;
$addJQuery = true;
?>
<!DOCTYPE html>
<html lang="en">
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
			<h2>Pictures</h2>
		</header>

		<section>
			<header>
				<h3>The Chalet</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/outside_view_3.jpg">
    					<img src="/pictures/medium/outside_view_3.jpg" alt="The chalet, view 1" />
					</picture>
					<figcaption>The chalet, view 1.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/outside_view_4.jpg">
    					<img src="/pictures/medium/outside_view_4.jpg" alt="The chalet, view 2" />
					</picture>
					<figcaption>The chalet, view 2.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/outside_view_5.jpg">
    					<img src="/pictures/medium/outside_view_5.jpg" alt="The chalet, view 3" />
					</picture>
					<figcaption>The chalet, view 3.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/outside_view_6.jpg">
    					<img src="/pictures/medium/outside_view_6.jpg" alt="Nationalpark Chalets view" />
					</picture>
					<figcaption>Nationalpark Chalets.</figcaption>
				</figure>
			</div>
		</section>

		<section class="section-separator">
			<header>
				<h3>Apartment 1</h3>
			</header>

			<section>
				<header>
					<h4>The living room</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_7.jpg">
    						<img src="/pictures/medium/a1_livingroom_7.jpg"	alt="Living roon, view 1" />
    					</picture>
						<figcaption>Living roon, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_8.jpg">
    						<img src="/pictures/medium/a1_livingroom_8.jpg"	alt="Living roon, view 2" />
    					</picture>
						<figcaption>Living roon, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_9.jpg">
    						<img src="/pictures/medium/a1_livingroom_9.jpg"	alt="Living roon, view 3" />
    					</picture>
						<figcaption>Living roon, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_10.jpg">
    						<img src="/pictures/medium/a1_livingroom_10.jpg" alt="Living roon, view 4" />
    					</picture>
						<figcaption>Living roon, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_11.jpg">
    						<img src="/pictures/medium/a1_livingroom_11.jpg" alt="Living roon, view 5" />
    					</picture>
						<figcaption>Living roon, view 5.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_12.jpg">
    						<img src="/pictures/medium/a1_livingroom_12.jpg" alt="Living roon, view 6" />
    					</picture>
						<figcaption>Living roon, view 6.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_13.jpg">
    						<img src="/pictures/medium/a1_livingroom_13.jpg" alt="Living roon, view 7" />
    					</picture>
						<figcaption>Living roon, view 7.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>The bedrooms</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom1_1.jpg">
    						<img src="/pictures/medium/a1_bedroom1_1.jpg" alt="Bedroom 1, view 1" />
    					</picture>
						<figcaption>Bedroom 1, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom1_2.jpg">
    						<img src="/pictures/medium/a1_bedroom1_2.jpg" alt="Bedroom 1, view 2" />
    					</picture>
						<figcaption>Bedroom 1, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom1_3.jpg">
    						<img src="/pictures/medium/a1_bedroom1_3.jpg" alt="Bedroom 1, toilet view" />
    					</picture>
						<figcaption>Bedroom 1, toilet.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom2.jpg">
    						<img src="/pictures/medium/a1_bedroom2.jpg" alt="Bedroom 2 view" />
						</picture>
						<figcaption>Bedroom 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom3_2.jpg">
    						<img src="/pictures/medium/a1_bedroom3_2.jpg" alt="Bedroom 3, view 1" />
    					</picture>
						<figcaption>Bedroom 3, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom3_3.jpg">
    						<img src="/pictures/medium/a1_bedroom3_3.jpg" alt="Bedroom 3, view 2" />
    					</picture>
						<figcaption>Bedroom 3, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom_terrace_1.jpg">
    						<img src="/pictures/medium/a1_bedroom_terrace_1.jpg" alt="Terrace from bedrooms 1 and 2, view 1" />
    					</picture>
						<figcaption>Terrace from bedrooms 1 and 2, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom_terrace_2.jpg">
    						<img src="/pictures/medium/a1_bedroom_terrace_2.jpg" alt="Terrace from bedrooms 1 and 2, view 2" />
    					</picture>
						<figcaption>Terrace from bedrooms 1 and 2, view 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>The Sauna</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_sauna_1.jpg">
    						<img src="/pictures/medium/a1_sauna_1.jpg" alt="Sauna, view 1" />
						</picture>
						<figcaption>Sauna, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_sauna_2.jpg">
    						<img src="/pictures/medium/a1_sauna_2.jpg" alt="Sauna, view 2" />
						</picture>
						<figcaption>Sauna, view 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>The terrace</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_9.jpg">
    						<img src="/pictures/medium/a1_terrace_9.jpg" alt="Terrace, view 1" />
    					</picture>
						<figcaption>Terrace, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_10.jpg">
    						<img src="/pictures/medium/a1_terrace_10.jpg" alt="Terrace, view 2" />
    					</picture>
						<figcaption>Terrace, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_2.jpg">
    						<img src="/pictures/medium/a1_terrace_2.jpg" alt="Terrace, view 3" />
    					</picture>
						<figcaption>Terrace, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_3.jpg">
    						<img src="/pictures/medium/a1_terrace_3.jpg" alt="Terrace, view 4" />
    					</picture>
						<figcaption>Terrace, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_11.jpg">
    						<img src="/pictures/medium/a1_terrace_11.jpg" alt="Terrace, view 5" />
    					</picture>
						<figcaption>Terrace, view 5.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_12.jpg">
    						<img src="/pictures/medium/a1_terrace_12.jpg" alt="Terrace, view 6" />
    					</picture>
						<figcaption>Terrace, view 6.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_13.jpg">
    						<img src="/pictures/medium/a1_terrace_13.jpg" alt="Terrace, view 7" />
    					</picture>
						<figcaption>Terrace, view 7.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_14.jpg">
    						<img src="/pictures/medium/a1_terrace_14.jpg" alt="Terrace, view 8" />
    					</picture>
						<figcaption>Terrace, view 8.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section class="section-separator">
			<header>
				<h3>Apartment 2</h3>
			</header>

			<section>
				<header>
					<h4>The living room</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_1.jpg">
    						<img src="/pictures/medium/a2_livingroom_1.jpg"	alt="Living room, view 1" />
    					</picture>
						<figcaption>Living room, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_4.jpg">
    						<img src="/pictures/medium/a2_livingroom_4.jpg"	alt="Living room, view 2" />
    					</picture>
						<figcaption>Living room, view 2.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>The bedrooms</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_bedroom1.jpg">
    						<img src="/pictures/medium/a2_bedroom1.jpg" alt="Bedroom 1 view" />
						</picture>
						<figcaption>Bedroom 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_bedroom2_1.jpg">
    						<img src="/pictures/medium/a2_bedroom2_1.jpg" alt="Bedroom 2 view" />
    					</picture>
						<figcaption>Bedroom 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_toilet.jpg">
    						<img src="/pictures/medium/a2_toilet.jpg" alt="Bathroom view" />
    					</picture>
						<figcaption>Bathroom.</figcaption>
					</figure>
				</div>
			</section>

			<section>
				<header>
					<h4>The terrace</h4>
				</header>

				<div class="pictures-container">
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_7.jpg">
    						<img src="/pictures/medium/a2_terrace_7.jpg" alt="Terrace, view 1" />
    					</picture>
						<figcaption>Terrace, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_8.jpg">
    						<img src="/pictures/medium/a2_terrace_8.jpg" alt="Terrace, view 2" />
    					</picture>
						<figcaption>Terrace, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_9.jpg">
    						<img src="/pictures/medium/a2_terrace_9.jpg" alt="Terrace, view 3" />
    					</picture>
						<figcaption>Terrace, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_10.jpg">
    						<img src="/pictures/medium/a2_terrace_10.jpg" alt="Terrace, view 4" />
    					</picture>
						<figcaption>Terrace, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_11.jpg">
    						<img src="/pictures/medium/a2_terrace_11.jpg" alt="Terrace, view 5" />
    					</picture>
						<figcaption>Terrace, view 5.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_12.jpg">
    						<img src="/pictures/medium/a2_terrace_12.jpg" alt="Terrace, view 6" />
    					</picture>
						<figcaption>Terrace, view 6.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_13.jpg">
    						<img src="/pictures/medium/a2_terrace_13.jpg" alt="Terrace, view 7" />
    					</picture>
						<figcaption>Terrace, view 7.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section class="section-separator">
			<header>
				<h3>The ski room</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/skiroom_2.jpg">
    					<img src="/pictures/medium/skiroom_2.jpg" alt="Ski room, view 1" />
					</picture>
					<figcaption>Ski room, view 1.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/skiroom_3.jpg">
    					<img src="/pictures/medium/skiroom_3.jpg" alt="Ski room, view 2" />
					</picture>
					<figcaption>Ski room, view 2.</figcaption>
				</figure>
			</div>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>