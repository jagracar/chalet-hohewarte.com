<?php
	// General php variables
	$page = 'pictures';
	$homeDir = '../';
	$alternative = 'bilder.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, holiday house, pictures">
<meta name="description" content="Chalet Hohe Warte pictures">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>css/styles.css">

<title>Picutes - Chalet Hohe Warte</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Pictures</h2>
		</header>

		<figure>
			<figcaption>View from the terrace.</figcaption>

			<div  class="pictures-container">
    			<figure>
    				<img src="<?php echo $homeDir;?>pictures/fig1.jpg" alt="Mountain view 1"/>
    				<figcaption>Mountain view 1.</figcaption>
    			</figure>
    			<figure>
    				<img src="<?php echo $homeDir;?>pictures/fig1.jpg" alt="Mountain view 2"/>
    				<figcaption>Mountain view 2.</figcaption>
    			</figure>
    			<figure>
    				<img src="<?php echo $homeDir;?>pictures/fig1.jpg" alt="Mountain view 3"/>
    				<figcaption>Mountain view 3.</figcaption>
    			</figure>
			</div>
		</figure>
	
	</article>
	</main>

	<!-- Footer -->
	<?php include_once 'footer.php';?>

</body>
</html>