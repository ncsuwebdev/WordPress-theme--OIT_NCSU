	
    <?php //get_search_form(); ?>
    <nav id="nav" role="navigation">
     
            
       <!-- <ul class="left-nav-block"><div class="primaryNav"> -->
        <div class="primaryNav">
        <ul id="menu">
		<?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?>
        </ul>
        </div>
        
        <!-- <ul class="left-nav-block"><div class="audience"> -->
        <div class="audience">
        <ul id="menu">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
        </ul>
        </div>
        
	</nav><!-- end nav -->
