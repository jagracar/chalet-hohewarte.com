<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Neukirchen am Großvenediger, holiday house, <?php echo $keywords;?>">
<meta name="description" content="<?php echo $descriptionText;?>">
<meta name="author" content="Javier Gracia Carpio">

<title><?php echo $titleText;?></title>

<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative;?>">
<link rel="icon" type="image/png" href="/favicon.png">

<!-- CSS files -->
<link rel="stylesheet" href="/css/styles.css">
<?php if($addLeaflet): ?>
<link rel="stylesheet" href="/css/leaflet/leaflet.css">
<?php endif ?>
<?php if($addLeaflet || $addJQuery): ?>

<!-- JavaScript files -->
<?php endif ?>
<?php if($addLeaflet): ?>
<script type="text/javascript" src="/js/libs/leaflet.js" async></script>
<?php endif ?>
<?php if($addJQuery): ?>
<script type="text/javascript" src="/js/libs/jquery-3.3.1.js" async></script>
<?php endif ?>
