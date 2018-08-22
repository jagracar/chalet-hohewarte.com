<?php
	// General php variables
	$page = 'activities';
	$homeDir = '';
	$alternative = 'aktivitaeten.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, holiday house, activities">
<meta name="description" content="Chalet Hohe Warte activities">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>../css/styles.css">

<title>Activities - Chalet Hohe Warte</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once $homeDir . 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Activities</h2>
		</header>
		
		<section>
    		<h3>Winter</h3>
		</section>

		<section>
    		<h3>Summer</h3>
		</section>
	</article>
	</main>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>

</body>
</html>