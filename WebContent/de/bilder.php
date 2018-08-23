<?php
	// General php variables
	$page = 'bilder';
	$homeDir = '';
	$alternative = 'pictures.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, Ferienwohnung, Bilder">
<meta name="description" content="Bilder Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="en" href="https://chalet-hohewarte.com/en/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>../css/styles.css">

<title>Bilder - Chalet Hohe Warte</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once $homeDir . 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Bilder</h2>
		</header>
	
		<figure>
			<figcaption>Aussicht von der Terrasse.</figcaption>
			
			<div  class="pictures-container">
    			<figure>
    				<img src="../pictures/fig1.jpg" alt="Berg blick 1"/>
    				<figcaption>Berg Blick 1.</figcaption>
    			</figure>
    			<figure>
    				<img src="../pictures/fig1.jpg" alt="Berg blick 2"/>
    				<figcaption>Berg Blick 2.</figcaption>
    			</figure>
    			<figure>
    				<img src="../pictures/fig1.jpg" alt="Berg blick 3"/>
    				<figcaption>Berg Blick 3.</figcaption>
    			</figure>
			</div>
		</figure>
	
	</article>
	</main>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>

</body>
</html>