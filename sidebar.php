	
    <?php //get_search_form(); ?>
    
    <?php 
	if ( is_front_page() ) { ?> <nav id="nav" role="navigation"> <?php ;
	}
	else if ( has_post_thumbnail() ) { ?> <nav id="nav" style="padding-bottom:280px;" role="navigation"> <?php ;
	} 
	
	else {
	?>
    <nav id="nav" role="navigation">
    <?php } ?>
            
       <!-- <ul class="left-nav-block"><div class="primaryNav"> -->
       
       <?php if ( has_nav_menu( 'primary' ) ) : ?>
       	<div class="primaryNav">
        	<ul id="menu">
				<?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?>
             </ul>
        </div>
        <?php endif; ?>
        
        <!-- <ul class="left-nav-block"><div class="audience"> -->
        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
       	<div class="audience">
        	<ul id="menu">
				<?php wp_nav_menu( array('theme_location' => 'secondary' ) ); ?>
             </ul>
        </div>
        <?php endif; ?>
        
	</nav><!-- end nav -->
