<?php
	// General php variables
	$page = 'beschreibung';
	$homeDir = '';
	$alternative = 'description.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Hohe Warte, Ferienwohnung, Beschreibung">
<meta name="description" content="Beschreibung Chalet Hohe Warte">
<meta name="author" content="Javier Gracia Carpio">

<link rel="alternate" hreflang="en" href="https://chalet-hohewarte.com/en/<?php echo $alternative; ?>">

<title>Beschreibung - Chalet Hohe Warte</title>

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

	<div class="main-container" onclick="return true">

    	<h1>Skiraum im Chalet</h1>
    
    	<p>Ein beheizter Skiraum mit Schuhtrockner ermöglicht bequemes Anziehen und Trocknen der
    	Sportausrüstung.</p>
    	
    	<h1>Waschküche</h1>
    
    	<p>Waschmaschine, Trockner, Bügelbrett mit Bügeleisen und Wäscheständer.</p>
    	
    	<h1>Terrasse und Balkon</h1>
    
    	<p>Großzügiger Balkon und Sonnenterrasse mit unverbautem Blick auf die Bergwelt.</p>
    	
    	<h1>Freisitz</h1>
    
    	<p>Beheizbarer Freisitz mit Grillmöglichkeit für gemütliches Beisammensein.</p>
    
    	<h1>Extras</h1>
    	
    	<ul>
    		<li>Handtücher vorhanden</li>
    		<li>Betten bezogen</li>
    		<li>Kaminholz verfügbar</li>
    		<li>Haustiere nicht erlaubt</li>
    		<li>Familienfreundlich (Hochstuhl, Kinderbett, usw.)</li>
    	</ul>

	</div>

	<!-- Footer -->
	<?php include_once $homeDir . 'footer.php';?>
</body>
</html>