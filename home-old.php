<?php get_header() ?>
<?php get_sidebar() ?>

<section id="content" role="main">
	<h6 class="screen-reader-text">Content</h6>
    
       <?php query_posts( 'category_name=feature&&posts_per_page=5' ); ?>
       <?php if ( have_posts()) : ?>
       <div id="player">      
            <div id="tabs">
                
				<?php while ( have_posts() ) : the_post() ?>                         
                    <div id="tabs-<?php the_id() ?>">
                    	<?php if (has_post_thumbnail()): ?>
                            <div class="media crop">
									<?php the_post_thumbnail('wide-featured-thumbnail');?>
                                    <div class="caption">
                                    <div class="copy">
                                    	<h3><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
                                        <?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
                                    </div></div>
							 </div>
                            <!--<div class="copy">
                                <h3 id="first"><a href="<?php //the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
                                <div class="media">
									<?php//the_post_thumbnail('medium');?>
							 	</div> 
								<?php //the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
                        	</div>-->
                            
                       <?php else: ?>    
                        <div class="copy">
                            <h3 id="first"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
                            <?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
                        </div>
                        <?php endif; ?>
                                               
                                                      
                    </div><!-- end tab -->
                <?php endwhile; ?>
                
                <div class="clear"></div>

                <ul>
                	<?php query_posts( 'category_name=feature&posts_per_page=5' ); ?>
					<?php 
						$i=1;
						while ( have_posts() ) : the_post() ?>    
                        <li class="tab"><a href="#tabs-<?php the_id() ?>"><?php echo $i; ?></a></li>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </ul>

            </div> <!-- end #tabs -->
            
            
            
        </div> <!-- end player -->
        <?php endif; ?>
                    
         <div id="homepage_column_holder">
         
         
       
        <?php query_posts( 'post_type=homepage&posts_per_page=3' ); ?>
        
		<?php while ( have_posts() ) : the_post() ?>
        <div class="column">
            <?php if (has_post_thumbnail()): 
  				the_post_thumbnail('homepage-thumb');
 				endif; ?>
		
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
            
                <h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				
				<div class="entry-content">
				<?php the_excerpt( /*__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' )*/ ) ?>
				</div>
		
			</div><!-- .post -->
          </div><!-- div.left -->
            <?php endwhile; ?>

         </div><!-- div#homepage_column_holder -->

        
            
				</section>
                <!-- end #content -->
                                               
<?php get_footer() ?>