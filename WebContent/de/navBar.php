<?php $active = 'is-active-item';?>

<nav>
	<div class="nav-logo">
		<a href="<?php echo $homeDir;?>/de" class="nav-item is-logo-item">Chalet Hohe Warte</a>
	</div>

	<div class="nav-menu-wrapper">
		<span class="nav-item is-menu-item menu-icon"></span>

		<div class="nav-blocks-wrapper">
			<div class="nav-block">
				<ul class="nav-list is-main-list">
					<li><a href="<?php echo $homeDir;?>beschreibung.php"
						class="nav-item <?php if($page == 'beschreibung') { echo $active; }?>">Beschreibung</a></li>
					<li><a href="<?php echo $homeDir;?>bilder.php"
						class="nav-item <?php if($page == 'bilder') { echo $active; }?>">Bilder</a></li>
					<li><a href="<?php echo $homeDir;?>kontakt.php"
						class="nav-item <?php if($page == 'kontakt') { echo $active; }?>">Kontakt</a></li>
					<li><a href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
						class="nav-item is-reservation-item" target="_blank">Jetz buchen!</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
