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

<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative; ?>">

<title>Activities - Chalet Hohe Warte</title>

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir; ?>../css/styles.css" />

<!-- Useful JavaScript files -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!-- Navigation bar -->
	<?php include_once $homeDir . 'navBar.php';?>

	<div class="main-container">
		<header>
			<h1>Activities</h1>
		</header>

    	<h2>Winter</h2>

    	<h2>Summer</h2>

	</div>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>
</body>
</html>