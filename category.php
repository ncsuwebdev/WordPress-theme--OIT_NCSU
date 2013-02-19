<?php get_header() ?>
<?php get_sidebar() ?>

<section id="content" role="main">
	<h6 class="screen-reader-text">Content</h6>
    	<?php /*
		<div id="crumbs">
			<h6 class="screen-reader-text">Breadcrumbs</h6>
                <ul>
                	<li><a href="<?php bloginfo('site_url') ?>">Home</a></li>
					<li>&gt; <a href="#" title="">Breadcrumb</a> </li>				                    
					<li>&gt; <a href="#" title="">Navigation </a> </li>          
					<li>&gt; Here </li>                 
				</ul>
        </div><!-- div#crumbs -->	
		*/ ?>
        
			<h2 class="entry-title"><?php //_e( 'Category Archives:', 'sandbox' ) ?> <span><?php single_cat_title() ?></span></h2>
			<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>


			<!--<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php //next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php //previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>-->

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-content">
                <?php if (has_post_thumbnail()): ?>
            	<div class="feature-image">
					<?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>

<?php the_excerpt(__( 'Read More... <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?>

				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
<?php if ( $cats_meow = sandbox_cats_meow(', ') ) : // Returns categories other than the one queried ?>
					<span class="cat-links"><?php printf( __( 'Also posted in %s', 'sandbox' ), $cats_meow ) ?></span>
					<span class="meta-sep">|</span>
<?php endif ?>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t| <span class=\"meta-sep\"></span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'sandbox' ), "<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\"></span>\n" ) ?>
					
				</div>
                
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

</section>
<!-- end #content -->

<?php get_sidebar('right') ?>   
<?php get_footer() ?>