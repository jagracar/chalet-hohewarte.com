<?php
	// General php variables
	$page = 'aktivitaeten';
	$homeDir = '';
	$alternative = 'activities.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, Ferienwohnung, Aktivitäten">
<meta name="description" content="Aktivitäten Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="en" href="https://chalet-hohewarte.com/en/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>../css/styles.css">

<title>Aktivitäten - Chalet Hohe Warte</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once $homeDir . 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Aktivitäten</h2>
		</header>

		<section>
    		<h3>Winter</h3>
		</section>

    	<section>
    		<h3>Sommer</h3>
		</section>
	</article>
	</main>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>

</body>
</html>