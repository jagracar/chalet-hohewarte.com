<?php
	// General php variables
	$page = 'bilder';
	$homeDir = '../';
	$alternative = 'pictures.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Neukirchen am Großvenediger, Ferienwohnung, Bilder">
<meta name="description" content="Bilder Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="icon" type="image/png" href="<?php echo $homeDir;?>favicon.png">
<link rel="alternate" hreflang="en" href="https://chalet-hohewarte.com/en/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>css/styles.css">

<title>Bilder - Chalet Hohe Warte</title>

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

			<div  class="pictures-container">
    			<figure class="horizontal-picture">
    				<img src="<?php echo $homeDir;?>pictures/outside_view.jpg" alt="Chalet Blick"/>
    				<figcaption>Das Chalet.</figcaption>
    			</figure>
			</div>
		</section>

		<section>
    		<header>
    			<h3>Wohnung 1</h3>
    		</header>

    		<figure>
    			<figcaption><h4>Das Wohnzimmer</h4></figcaption>
 
    			<div  class="pictures-container">
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_livingroom_1.jpg" alt="Wohnzimmer, Blick 1"/>
        				<figcaption>Wohnzimmer, Blick 1.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_livingroom_2.jpg" alt="Wohnzimmer, Blick 2"/>
        				<figcaption>Wohnzimmer, Blick 2.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_livingroom_3.jpg" alt="Wohnzimmer, Blick 3"/>
        				<figcaption>Wohnzimmer, Blick 3.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_livingroom_4.jpg" alt="Wohnzimmer, Blick 4"/>
        				<figcaption>Wohnzimmer, Blick 4.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_sauna.jpg" alt="Sauna Blick"/>
        				<figcaption>Sauna.</figcaption>
        			</figure>
    			</div>
    		</figure>

    		<figure>
    			<figcaption><h4>Die Schlafzimmer</h4></figcaption>

    			<div  class="pictures-container">
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom1.jpg" alt="Schlafzimmer 1 Blick"/>
        				<figcaption>Schlafzimmer 1.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom2.jpg" alt="Schlafzimmer 2 Blick"/>
        				<figcaption>Schlafzimmer 2.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom_terrace_1.jpg" alt="Terrase von Schlafzimmer 1 und 2, Blick 1"/>
        				<figcaption>Terrase von Schlafzimmer 1 und 2, Blick 1.</figcaption>
        			</figure>
        			<figure class="vertical-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom_terrace_2.jpg" alt="Terrase von Schlafzimmer 1 und 2, Blick 2"/>
        				<figcaption>Terrase von Schlafzimmer 1 und 2, Blick 2.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_1.jpg" alt="Schlafzimmer 3, Blick 1"/>
        				<figcaption>Schlafzimmer 3, Blick 1.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_2.jpg" alt="Schlafzimmer 3, Blick 2"/>
        				<figcaption>Schlafzimmer 3, Blick 2.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_bedroom3_3.jpg" alt="Schlafzimmer 3, Blick 3"/>
        				<figcaption>Schlafzimmer 3, Blick 3.</figcaption>
        			</figure>
    			</div>
    		</figure>

    		<figure>
    			<figcaption><h4>Die Terrase</h4></figcaption>

    			<div  class="pictures-container">
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_1.jpg" alt="Terrase, Blick 1"/>
        				<figcaption>Terrase, Blick 1.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_2.jpg" alt="Terrase, Blick 2"/>
        				<figcaption>Terrase, Blick 2.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_3.jpg" alt="Terrase, Blick 3"/>
        				<figcaption>Terrase, Blick 3.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_4.jpg" alt="Terrase, Blick 4"/>
        				<figcaption>Terrase, Blick 4.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_5.jpg" alt="Terrase, Blick 5"/>
        				<figcaption>Terrase, Blick 5.</figcaption>
        			</figure>
        			<figure class="vertical-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_6.jpg" alt="Terrase, Blick 6"/>
        				<figcaption>Terrase, Blick 6.</figcaption>
        			</figure>
        			<figure class="vertical-picture">
        				<img src="<?php echo $homeDir;?>pictures/a1_terrace_7.jpg" alt="Terrase, Blick 7"/>
        				<figcaption>Terrase, Blick 7.</figcaption>
        			</figure>
    			</div>
    		</figure>
		</section>

		<section>
    		<header>
    			<h3>Wohnung 2</h3>
    		</header>

    		<figure>
    			<figcaption><h4>Das Wohnzimmer</h4></figcaption>
    			
    			<div  class="pictures-container">
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_livingroom.jpg" alt="Wohnzimmer Blick"/>
        				<figcaption>Wohnzimmer.</figcaption>
        			</figure>
    			</div>
    		</figure>

    		<figure>
    			<figcaption><h4>Die Schlafzimmer</h4></figcaption>
    			
    			<div  class="pictures-container">
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_bedroom1.jpg" alt="Schlafzimmer 1 Blick"/>
        				<figcaption>Schlafzimmer 1.</figcaption>
        			</figure>
    			</div>
    		</figure>

    		<figure>
    			<figcaption><h4>Die Terrase</h4></figcaption>

    			<div  class="pictures-container">
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_terrace_1.jpg" alt="Terrase, Blick 1"/>
        				<figcaption>Terrase, Blick 1.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_terrace_2.jpg" alt="Terrase, Blick 2"/>
        				<figcaption>Terrase, Blick 2.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_terrace_3.jpg" alt="Terrase, Blick 3"/>
        				<figcaption>Terrase, Blick 3.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_terrace_4.jpg" alt="Terrase, Blick 4"/>
        				<figcaption>Terrase, Blick 4.</figcaption>
        			</figure>
        			<figure class="horizontal-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_terrace_5.jpg" alt="Terrase, Blick 5"/>
        				<figcaption>Terrase, Blick 5.</figcaption>
        			</figure>
        			<figure class="vertical-picture">
        				<img src="<?php echo $homeDir;?>pictures/a2_terrace_6.jpg" alt="Terrase, Blick 6"/>
        				<figcaption>Terrase, Blick 6.</figcaption>
        			</figure>
    			</div>
    		</figure>
		</section>

		<section>
    		<header>
    			<h3>Aussicht von die Terrassen</h3>
    		</header>

			<div  class="pictures-container">
    			<figure class="horizontal-picture">
    				<img src="<?php echo $homeDir;?>pictures/mountains_1.jpg" alt="Berge, Blick 1"/>
    				<figcaption>Berge, Blick 1.</figcaption>
    			</figure>
    			<figure class="horizontal-picture">
    				<img src="<?php echo $homeDir;?>pictures/mountains_2.jpg" alt="Berge, Blick 2"/>
    				<figcaption>Berge, Blick 2.</figcaption>
    			</figure>
    			<figure class="vertical-picture">
    				<img src="<?php echo $homeDir;?>pictures/mountains_3.jpg" alt="Berge, Blick 3"/>
    				<figcaption>Berge, Blick 3.</figcaption>
    			</figure>
    			<figure class="horizontal-picture">
    				<img src="<?php echo $homeDir;?>pictures/mountains_4.jpg" alt="Berge, Blick 4"/>
    				<figcaption>Berge, Blick 4.</figcaption>
    			</figure>
    			<figure class="horizontal-picture">
    				<img src="<?php echo $homeDir;?>pictures/mountains_5.jpg" alt="Berge, Blick 5"/>
    				<figcaption>Berge, Blick 5.</figcaption>
    			</figure>
    			<figure class="horizontal-picture">
    				<img src="<?php echo $homeDir;?>pictures/mountains_6.jpg" alt="Berge, Blick 6"/>
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