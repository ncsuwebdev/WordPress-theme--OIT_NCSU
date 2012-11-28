<?php if ( !is_active_sidebar ( 'home_sidebar' ) ) : 
		get_header(twoCol);
	else :
	 	get_header();
		get_sidebar(home);
	endif;  ?>
<?php get_sidebar() ?>

<section id="content" role="main">
	<h6 class="screen-reader-text">Content</h6>
  
       <?php query_posts( 'category_name=feature&&posts_per_page=5' ); ?>
       <?php if ( have_posts()) : ?>
       	<style type="text/css">
	   		div#home aside#sidebar {float:right; position:relative; top:282px;}
		</style>
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
                           
                       <?php else: ?>    
                        <div class="copy">
                            <h3><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
                            <?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
                        </div>
                        <?php endif; ?>
                                               
                                                      
                    </div><!-- end tab -->
                <?php 
					endwhile;
					wp_reset_query(); 
				?>
                
                <div class="clear"></div>

                <ul>
                	<?php query_posts( 'category_name=feature&&posts_per_page=5' ); ?>
					<?php 
						$i=1;
						while ( have_posts() ) : the_post() ?>    
                        <li class="tab"><a href="#tabs-<?php the_id() ?>"><?php echo $i; ?></a></li>
                        <?php $i++; ?>
                    <?php 
						endwhile; 
						wp_reset_query()
					?>
                </ul>

            </div> <!-- end #tabs -->   
            
            
        </div> <!-- end player -->
        <?php endif; ?>
        
        <?php global $query_string;
			query_posts( $query_string );  ?>
            
		<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h1>
				
				<div class="entry-content">
                <?php if (has_post_thumbnail()): ?>
            	<div class="feature-image">
					<?php if ($i < 1) { the_post_thumbnail('medium'); } else { the_post_thumbnail('thumbnail'); } $i++; ?>
                </div>
                <?php endif; ?>
				<?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</div>
			</div><!-- .post -->

			<?php comments_template() ?>
            
            <?php 
				endwhile; 
				wp_reset_query()
			?>
            
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
                <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
            </div>
            
            
    </section>
    <!-- end #content -->

   
                                            
<?php get_footer() ?>