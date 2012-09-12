<aside role="complementary" id="sidebar">
                

             

    <h6 class="screen-reader-text">Sidebar</h6>
	
    <?php
		//$children = get_pages('child_of='.$post->ID);
		//if( count( $children ) != 0 ) { ?>
		<!--	 <div id="subNav">
        		<h2>More Information</h2>
        		<?php //simple_section_nav();?>
    		</div>
		-->	
		<?php //} ?>	
    
   
   <!-- <div style="clear:both; padding-bottom:20px;"></div> -->
    
    <?php if ( ! dynamic_sidebar('sidebar_main') ) : ?> 
    
<!-- SOCIAL MEDIA OPTIONS TURNED OFF UNTIL THEY ARE SET UP
    <div class="brite">
        <h3>Facebook</h3>
        <p><a src="" href="#"><img width="50" height="50" alt="" src="<?php //bloginfo('template_directory'); ?>/img/facebook.jpg" class="thumb_copy"></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh leo, cursus at sagittis vel, cursus ut ligula.</p>    
      <p class="read_more"><a href="#">Read more</a></p>
    </div>
    
    <div class="brite">
        <h3>Twitter</h3>
        <p><a href="#"><img width="50" height="50" alt="" src="<?php //bloginfo('template_directory'); ?>/img/twitter.jpg" class="thumb_copy"></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh leo, cursus at sagittis vel, cursus ut ligula.</p>    
        <p class="read_more"><a href="#">Read more</a></p>
    </div>
-->  
<?php endif; ?>


</aside>
