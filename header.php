<!doctype html>
<html lang="en" <?php language_attributes() ?>>
<head>

	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <meta name="description" content="<?php bloginfo('description') ?>" />
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

    <!-- Core CSS -->
    <link href="<?php bloginfo('template_directory') ?>/css/reset.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" rel="stylesheet" media="screen" type="text/css" /> 
    <link href="<?php bloginfo('template_directory') ?>/css/global.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_directory') ?>/css/print.css" media="print" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_directory') ?>/css/player.css" media="screen" rel="stylesheet" type="text/css" />
    
    <!-- Local CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    
    <!-- Core JS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/ariaTabs3b.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/global.js" type="text/javascript"></script>
    
    <?php wp_head() // For plugins ?>
    
    <!--[if IE]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<!--<body id="<?php //echo generate_layout_id(); ?>" class="<?php //sandbox_body_class() ?>">-->
<body id="three_col_vert" class="<?php sandbox_body_class() ?>">


<noscript>
<div id="js-alert">
Javascript is disabled. The styling of this page may not render properly in certain browsers. 
</div>
</noscript>


    <a href="#content" class="access" title="Skip to main content">Skip To Main Content</a>


    <div id="wrapper" class="hfeed">
    
    <div id="middle">
    <header id="headertop">
    
     <div class="logo" role="banner" aria-labelledby="ncsu-banner-link">
        <a href="http://www.ncsu.edu/" id="ncsu-banner-link" title="Return to the North Carolina State University home page">North Carolina State University</a>
        <!--<a href="http://125.ncsu.edu" id="ncsu-125-link" title="NC State celebrates 125 years.">125 Years</a>-->
        <a href="<?php bloginfo('home'); ?>" id="homepage-banner-link" title="Return to home page"><?php bloginfo('name'); ?></a>
    </div>
    
        <ul id="topnav" role="navigation" aria-label="Universal ncsu.edu navigation toolbar">
            <li class="first"><a href="http://www.ncsu.edu/directory/" title="Find People at North Carolina State University">Find People</a></li>
            <li><a href="http://www.lib.ncsu.edu/" title="North Carolina State University Libraries">Libraries</a></li>
            <li><a href="http://news.ncsu.edu/" title="Latest North Carolina State University News">News</a></li>
            <li><a href="http://www.ncsu.edu/calendar/" title="North Carolina State University Events Calendar">Calendar</a></li>
            <li><a href="http://mypack.ncsu.edu" title="North Carolina State University Portal">MyPack Portal</a></li>
            <li><a href="http://giving.ncsu.edu/" title="Giving to North Carolina State University">Giving</a></li>
            <li><a href="http://www.ncsu.edu/campus_map/" title="North Carolina State University Campus Map">Campus Map</a></li>
        </ul>
        
        <?php //wp_nav_menu( array( 'menu' => 'Utility Nav', 'theme_location' => 'banner' ) ); ?>
        
        
            
            <a href="<?php bloginfo('home'); ?>" class="access"><?php bloginfo('name'); ?></a>
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
                    
                <form action="<?php bloginfo('home'); ?>" id="searchform" method="get" role="search">
                <div class="search-box"> 
                    <label for="s"><span class="screen-reader-text">Search</span></label>
                    <input type="text" onfocus="clear_search(this)" class="search-query" value="Search this site" name="s"> 
                    <input type="submit" id="searchsubmit" class="search-button" value="" tabindex="0">
                </div>
                </form>   
            
            </header>
            