<?php
function addActiveItemClass($pageName) {
    global $page;
    
    if ($page == $pageName) {
        echo ' is-active-item';
    }
}
?>
    <header class="nav-container">
    	<h1 class="nav-header">
    		<a href="index.php" class="nav-item is-header-item">Chalet Hohe Warte</a>
    	</h1>
    
    	<nav class="nav-menu-wrapper">
    		<span class="nav-item is-menu-item menu-icon" onclick="return false;"></span>
    
    		<ul class="nav-menu-list">
    			<li><a href="index.php" class="nav-item<?php addActiveItemClass('home');?>">Home</a></li>
    			<li><a href="description.php" class="nav-item<?php addActiveItemClass('description');?>">Description</a></li>
    			<li><a href="pictures.php" class="nav-item<?php addActiveItemClass('pictures');?>">Pictures</a></li>
    			<li><a href="activities.php" class="nav-item<?php addActiveItemClass('activities');?>">Activities</a></li>
    			<li><a href="contact.php" class="nav-item<?php addActiveItemClass('contact');?>">Contact</a></li>
    			<li><a href="reservations.php" class="nav-item<?php addActiveItemClass('reservations');?>">Reservations</a></li>
    		</ul>
    	</nav>
    
    	<nav class="nav-lang-wrapper">
    		<ul class="nav-lang-list">
    			<li><a href="" class="nav-item is-active-item">EN</a></li>
    			<li><a href="/de/<?php echo $alternative;?>" class="nav-item">DE</a></li>
    		</ul>
    	</nav>
    </header>
