<?php $active = 'is-active-item';?>

<header class="nav-container">
	<h1 class="nav-header">
		<a href="<?php echo $homeDir;?>/en" class="nav-item is-header-item">Chalet Hohe Warte</a>
	</h1>

	<nav class="nav-menu-wrapper">
		<span class="nav-item is-menu-item menu-icon" onclick="return false;"></span>

		<ul class="nav-menu-list">
			<li><a href="<?php echo $homeDir;?>index.php"
				class="nav-item <?php if($page == 'home') { echo $active; }?>">Home</a></li>
			<li><a href="<?php echo $homeDir;?>description.php"
				class="nav-item <?php if($page == 'description') { echo $active; }?>">Description</a></li>
			<li><a href="<?php echo $homeDir;?>pictures.php"
				class="nav-item <?php if($page == 'pictures') { echo $active; }?>">Pictures</a></li>
			<li><a href="<?php echo $homeDir;?>activities.php"
				class="nav-item <?php if($page == 'activities') { echo $active; }?>">Activities</a></li>
			<li><a href="<?php echo $homeDir;?>contact.php"
				class="nav-item <?php if($page == 'contact') { echo $active; }?>">Contact</a></li>
			<li><a href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
				class="nav-item is-reservation-item" target="_blank">Reservations</a></li>
		</ul>
	</nav>

	<nav class="nav-lang-wrapper">
 		<ul class="nav-lang-list">
			<li><a href="<?php echo $homeDir;?>"
				class="nav-item is-active-item">EN</a></li>
			<li><a href="/de/<?php echo $alternative;?>"
				class="nav-item">DE</a></li>
		</ul>
	</nav>
</header>
