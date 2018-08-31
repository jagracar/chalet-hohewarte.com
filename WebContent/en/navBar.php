<?php $active = ' is-active-item';?>
    <header class="nav-container">
    	<h1 class="nav-header">
    		<a href="index.php" class="nav-item is-header-item">Chalet Hohe Warte</a>
    	</h1>
    
    	<nav class="nav-menu-wrapper">
    		<span class="nav-item is-menu-item menu-icon" onclick="return false;"></span>
    
    		<ul class="nav-menu-list">
    			<li><a href="index.php"
    				class="nav-item<?php if($page == 'home') { echo $active; }?>">Home</a></li>
    			<li><a href="description.php"
    				class="nav-item<?php if($page == 'description') { echo $active; }?>">Description</a></li>
    			<li><a href="pictures.php"
    				class="nav-item<?php if($page == 'pictures') { echo $active; }?>">Pictures</a></li>
    			<li><a href="activities.php"
    				class="nav-item<?php if($page == 'activities') { echo $active; }?>">Activities</a></li>
    			<li><a href="contact.php"
    				class="nav-item<?php if($page == 'contact') { echo $active; }?>">Contact</a></li>
    			<li><a href="reservations.php"
    				class="nav-item<?php if($page == 'reservations') { echo $active; }?>">Reservations</a></li>
    		</ul>
    	</nav>
    
    	<nav class="nav-lang-wrapper">
    		<ul class="nav-lang-list">
    			<li><a href="" class="nav-item<?php echo $active;?>">EN</a></li>
    			<li><a href="<?php echo $homeDir;?>de/<?php echo $alternative;?>"
    				class="nav-item">DE</a></li>
    		</ul>
    	</nav>
    </header>
