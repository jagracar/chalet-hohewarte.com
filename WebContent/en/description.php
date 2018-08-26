<?php
	// General php variables
	$page = 'description';
	$homeDir = '../';
	$alternative = 'beschreibung.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Neukirchen am Großvenediger, holiday house, description">
<meta name="description" content="Chalet Hohe Warte description">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>css/styles.css">

<title>Description - Chalet Hohe Warte</title>

</head>

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
        
        	<p>Ein beheizter Skiraum mit Schuhtrockner ermöglicht bequemes Anziehen und Trocknen der
        	Sportausrüstung.</p>
    	</section>
    
    	<section>
        	<h3>Waschküche</h3>
        
        	<p>Waschmaschine, Trockner, Bügelbrett mit Bügeleisen und Wäscheständer.</p>
    	</section>

    	<section>
        	<h3>Terrasse und Balkon</h3>
        
        	<p>Großzügiger Balkon und Sonnenterrasse mit unverbautem Blick auf die Bergwelt.</p>
    	</section>
    	
    	<section>
        	<h3>Freisitz</h3>
        
        	<p>Beheizbarer Freisitz mit Grillmöglichkeit für gemütliches Beisammensein.</p>
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