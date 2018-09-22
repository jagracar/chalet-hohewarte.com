<?php
// General php variables
$page = 'pictures';
$keywords = 'pictures, rooms, terrace';
$descriptionText = 'Pictures of Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Pictures - Chalet Hohe Warte in Neukirchen am Großvenediger';
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
    						srcset="/pictures/small/outside_view_2.jpg">
    					<img src="/pictures/medium/outside_view_2.jpg" alt="Chalet view">
    				</picture>
					<figcaption>The Chalet.</figcaption>
				</figure>
			</div>
		</section>

		<section>
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
    							srcset="/pictures/small/a1_livingroom_1.jpg">
    						<img src="/pictures/medium/a1_livingroom_1.jpg"	alt="Living room, view 1" />
    					</picture>
						<figcaption>Living room, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_2.jpg">
    						<img src="/pictures/medium/a1_livingroom_2.jpg" alt="Living room, view 2" />
    					</picture>
						<figcaption>Living room, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_3.jpg">
    						<img src="/pictures/medium/a1_livingroom_3.jpg"	alt="Living room, view 3" />
    					</picture>
						<figcaption>Living room, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_4.jpg">
    						<img src="/pictures/medium/a1_livingroom_4.jpg"	alt="Living room, view 4" />
    					</picture>
						<figcaption>Living room, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_5.jpg">
    						<img src="/pictures/medium/a1_livingroom_5.jpg"	alt="Kitchen, view 1" />
    					</picture>
						<figcaption>Kitchen, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_livingroom_6.jpg">
    						<img src="/pictures/medium/a1_livingroom_6.jpg" alt="Kitchen, view 2" />
    					</picture>
						<figcaption>Kitchen, view 2.</figcaption>
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
    						<img src="/pictures/medium/a1_bedroom1_3.jpg" alt="Bedroom 1 toilet view" />
    					</picture>
						<figcaption>Bedroom 1 toilet.</figcaption>
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
    							srcset="/pictures/small/a1_bedroom3_1.jpg">
    						<img src="/pictures/medium/a1_bedroom3_1.jpg" alt="Bedroom 3, view 1" />
    					</picture>
						<figcaption>Bedroom 3, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom3_2.jpg">
    						<img src="/pictures/medium/a1_bedroom3_2.jpg" alt="Bedroom 3, view 2" />
    					</picture>
						<figcaption>Bedroom 3, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom3_3.jpg">
    						<img src="/pictures/medium/a1_bedroom3_3.jpg" alt="Bedroom 3, view 3" />
    					</picture>
						<figcaption>Bedroom 3, view 3.</figcaption>
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
					<figure class="vertical-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_bedroom_terrace_3.jpg">
    						<img src="/pictures/medium/a1_bedroom_terrace_3.jpg" alt="Terrace from bedrooms 1 and 2, view 3" />
    					</picture>
						<figcaption>Terrace from bedrooms 1 and 2, view 3.</figcaption>
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
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_sauna_3.jpg">
    						<img src="/pictures/medium/a1_sauna_3.jpg" alt="Sauna, view 3" />
						</picture>
						<figcaption>Sauna, view 3.</figcaption>
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
    							srcset="/pictures/small/a1_terrace_1.jpg">
    						<img src="/pictures/medium/a1_terrace_1.jpg" alt="Terrace, view 1" />
						</picture>
						<figcaption>Terrace, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_2.jpg">
    						<img src="/pictures/medium/a1_terrace_2.jpg" alt="Terrace, view 2" />
						</picture>
						<figcaption>Terrace, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_3.jpg">
    						<img src="/pictures/medium/a1_terrace_3.jpg" alt="Terrace, view 3" />
						</picture>
						<figcaption>Terrace, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_4.jpg">
    						<img src="/pictures/medium/a1_terrace_4.jpg" alt="Terrace, view 4" />
						</picture>
						<figcaption>Terrace, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_5.jpg">
    						<img src="/pictures/medium/a1_terrace_5.jpg" alt="Terrace, view 5" />
						</picture>
						<figcaption>Terrace, view 5.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_6.jpg">
    						<img src="/pictures/medium/a1_terrace_6.jpg" alt="Terrace, view 6" />
						</picture>
						<figcaption>Terrace, view 6.</figcaption>
					</figure>
					<figure class="vertical-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_7.jpg">
    						<img src="/pictures/medium/a1_terrace_7.jpg" alt="Terrace, view 7" />
						</picture>
						<figcaption>Terrace, view 7.</figcaption>
					</figure>
					<figure class="vertical-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a1_terrace_8.jpg">
    						<img src="/pictures/medium/a1_terrace_8.jpg" alt="Terrace, view 8" />
						</picture>
						<figcaption>Terrace, view 8.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section>
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
    							srcset="/pictures/small/a2_livingroom_2.jpg">
    						<img src="/pictures/medium/a2_livingroom_2.jpg"	alt="Living room, view 2" />
    					</picture>
						<figcaption>Living room, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_3.jpg">
    						<img src="/pictures/medium/a2_livingroom_3.jpg"	alt="Living room, view 3" />
    					</picture>
						<figcaption>Living room, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_4.jpg">
    						<img src="/pictures/medium/a2_livingroom_4.jpg"	alt="Living room, view 4" />
    					</picture>
						<figcaption>Living room, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_livingroom_5.jpg">
    						<img src="/pictures/medium/a2_livingroom_5.jpg" alt="Kitchen view" />
						</picture>
						<figcaption>Kitchen.</figcaption>
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
    						<img src="/pictures/medium/a2_bedroom2_1.jpg" alt="Bedroom 2, view 1" />
    					</picture>
						<figcaption>Bedroom 2, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_bedroom2_2.jpg">
    						<img src="/pictures/medium/a2_bedroom2_2.jpg" alt="Bedroom 2, view 2" />
    					</picture>
						<figcaption>Bedroom 2, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_toilet.jpg">
    						<img src="/pictures/medium/a2_toilet.jpg" alt="Toilet view" />
    					</picture>
						<figcaption>Toilet.</figcaption>
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
    							srcset="/pictures/small/a2_terrace_1.jpg">
    						<img src="/pictures/medium/a2_terrace_1.jpg" alt="Terrace, view 1" />
						</picture>
						<figcaption>Terrace, view 1.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_2.jpg">
    						<img src="/pictures/medium/a2_terrace_2.jpg" alt="Terrace, view 2" />
						</picture>
						<figcaption>Terrace, view 2.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_3.jpg">
    						<img src="/pictures/medium/a2_terrace_3.jpg" alt="Terrace, view 3" />
						</picture>
						<figcaption>Terrace, view 3.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_4.jpg">
    						<img src="/pictures/medium/a2_terrace_4.jpg" alt="Terrace, view 4" />
						</picture>
						<figcaption>Terrace, view 4.</figcaption>
					</figure>
					<figure class="horizontal-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_5.jpg">
    						<img src="/pictures/medium/a2_terrace_5.jpg" alt="Terrace, view 5" />
						</picture>
						<figcaption>Terrace, view 5.</figcaption>
					</figure>
					<figure class="vertical-figure">
						<picture>
    						<source media="(max-width: 480px)"
    							srcset="/pictures/small/a2_terrace_6.jpg">
    						<img src="/pictures/medium/a2_terrace_6.jpg" alt="Terrace, view 6" />
						</picture>
						<figcaption>Terrace, view 6.</figcaption>
					</figure>
				</div>
			</section>
		</section>

		<section>
			<header>
				<h3>Views from the terrace</h3>
			</header>

			<div class="pictures-container">
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_1.jpg">
    					<img src="/pictures/medium/mountains_1.jpg" alt="Mountains, view 1" />
					</picture>
					<figcaption>Mountains, view 1.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_2.jpg">
    					<img src="/pictures/medium/mountains_2.jpg" alt="Mountains, view 2" />
					</picture>
					<figcaption>Mountains, view 2.</figcaption>
				</figure>
				<figure class="vertical-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_3.jpg">
    					<img src="/pictures/medium/mountains_3.jpg" alt="Mountains, view 3" />
					</picture>
					<figcaption>Mountains, view 3.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_4.jpg">
    					<img src="/pictures/medium/mountains_4.jpg" alt="Mountains, view 4" />
					</picture>
					<figcaption>Mountains, view 4.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_5.jpg">
    					<img src="/pictures/medium/mountains_5.jpg" alt="Mountains, view 5" />
					</picture>
					<figcaption>Mountains, view 5.</figcaption>
				</figure>
				<figure class="horizontal-figure">
					<picture>
    					<source media="(max-width: 480px)"
    						srcset="/pictures/small/mountains_6.jpg">
    					<img src="/pictures/medium/mountains_6.jpg" alt="Mountains, view 6" />
					</picture>
					<figcaption>Mountains, view 6.</figcaption>
				</figure>
			</div>
		</section>
	</article>
	</main>

	<!-- Footer -->
<?php require 'footer.php';?>
</body>
</html>