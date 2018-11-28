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
    			<li><a href="index.php"	class="nav-item<?php addActiveItemClass('home');?>">Startseite</a></li>
    			<li><a href="beschreibung.php" class="nav-item<?php addActiveItemClass('beschreibung');?>">Beschreibung</a></li>
    			<li><a href="bilder.php" class="nav-item<?php addActiveItemClass('bilder');?>">Bilder</a></li>
    			<li><a href="aktivitaeten.php" class="nav-item<?php addActiveItemClass('aktivitaeten');?>">Aktivitäten</a></li>
    			<li><a href="lage.php" class="nav-item<?php addActiveItemClass('lage');?>">Lage</a></li>
    			<li><a href="buchen.php" class="nav-item<?php addActiveItemClass('buchen');?>">Jetzt buchen!</a></li>
    		</ul>
    	</nav>
    
    	<nav class="nav-lang-wrapper">
    		<ul class="nav-lang-list">
    			<li><a href="/en/<?php echo $alternative;?>" class="nav-item">EN</a></li>
    			<li><a href="" class="nav-item is-active-item">DE</a></li>
    		</ul>
    	</nav>
    </header>
