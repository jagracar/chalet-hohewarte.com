<?php $active = 'is-active-item';?>

<nav>
	<div class="nav-logo">
		<a href="<?php echo $homeDir;?>/en" class="nav-item is-logo-item">Chalet Hohe Warte</a>
	</div>

	<div class="nav-menu-wrapper">
		<span class="nav-item is-menu-item menu-icon"></span>

		<div class="nav-blocks-wrapper">
			<div class="nav-block">
				<ul class="nav-list is-main-list">
					<li><a href="<?php echo $homeDir;?>description.php"
						class="nav-item <?php if($page == 'description') { echo $active; }?>">Description</a></li>
					<li><a href="<?php echo $homeDir;?>pictures.php"
						class="nav-item <?php if($page == 'pictures') { echo $active; }?>">Pictures</a></li>
					<li><a href="<?php echo $homeDir;?>contact.php"
						class="nav-item <?php if($page == 'contact') { echo $active; }?>">Contact</a></li>
					<li><a href="https://www.chaletsplus.com/de/chalet/neukirchen-am-grossvenediger/wildkogel-arena/zillertal-arena/kitzbuhler-alpen/nationalpark-chalet-hohe-warte-691.html"
						class="nav-item is-reservation-item" target="_blank">Reservations</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
