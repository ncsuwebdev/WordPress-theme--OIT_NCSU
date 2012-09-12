<?php
/*
Template Name: Two-column
*/
?>

<?php get_header(twoCol) ?>
<?php get_sidebar() ?>

<div class="crop">
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'wide-featured-thumbnail' ); } ?>
</div>

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

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

</section>
<!-- end #content -->
 
<?php get_footer() ?>