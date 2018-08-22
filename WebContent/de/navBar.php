<?php $active = 'is-active-item';?>

<header class="nav-container">
	<h1 class="nav-header">
		<a href="<?php echo $homeDir;?>/de" class="nav-item is-header-item">Chalet Hohe Warte</a>
	</h1>

	<nav class="nav-menu-wrapper">
		<span class="nav-item is-menu-item menu-icon" onclick="return false;"></span>

		<ul class="nav-menu-list">
			<li><a href="<?php echo $homeDir;?>index.php"
				class="nav-item <?php if($page == 'home') { echo $active; }?>">Startseite</a></li>
			<li><a href="<?php echo $homeDir;?>beschreibung.php"
				class="nav-item <?php if($page == 'beschreibung') { echo $active; }?>">Beschreibung</a></li>
			<li><a href="<?php echo $homeDir;?>bilder.php"
				class="nav-item <?php if($page == 'bilder') { echo $active; }?>">Bilder</a></li>
			<li><a href="<?php echo $homeDir;?>aktivitaeten.php"
				class="nav-item <?php if($page == 'aktivitaeten') { echo $active; }?>">Aktivitäten</a></li>
			<li><a href="<?php echo $homeDir;?>kontakt.php"
				class="nav-item <?php if($page == 'kontakt') { echo $active; }?>">Kontakt</a></li>
			<li><a href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
				class="nav-item is-reservation-item" target="_blank">Jetz buchen!</a></li>
		</ul>
	</nav>

	<nav class="nav-lang-wrapper">
		<ul class="nav-lang-list">
			<li><a href="/en/<?php echo $alternative;?>"
				class="nav-item">EN</a></li>
			<li><a href="<?php echo $homeDir;?>"
				class="nav-item is-active-item">DE</a></li>
		</ul>
	</nav>
</header>
