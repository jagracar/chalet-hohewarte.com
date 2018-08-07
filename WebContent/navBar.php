<?php $active = 'is-active-item';?>

<nav>
	<div class="nav-logo">
		<a href="<?php echo $homeDir;?>/" class="nav-item is-logo-item">Chalet Hohe Warte</a>
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
				</ul>
			</div>

			<div class="nav-block is-secondary-block">
				<span class="nav-item is-list-toogle-item">Social</span>
				<ul class="nav-list">
					<li><a href="https://github.com/jagracar" class="nav-item github-icon">GitHub</a></li>
					<li><a href="http://www.facebook.com/jgraciacarpio" class="nav-item facebook-icon">Facebook</a></li>
					<li><a href="https://twitter.com/jagracar" class="nav-item twitter-icon">Twitter</a></li>
					<li><a href="https://vimeo.com/jagracar" class="nav-item vimeo-icon">Vimeo</a></li>
					<li><a href="https://www.linkedin.com/in/javiergraciacarpio" class="nav-item linkedin-icon">LinkedIn</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
