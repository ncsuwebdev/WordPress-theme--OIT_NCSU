<aside role="complementary" id="sidebar">
<h6 class="screen-reader-text">Sidebar</h6>                

<?php if ( ! dynamic_sidebar('sidebar_posts') ) : ?>   
    
    <h2 class="error">PLEASE SPECIFY A WIDGET</h2>
    Please add a widget to the <em>Posts Sidebar</em> section of the Apperance > Widgets page (in WordPress Administration).
    
<?php endif; ?>

</aside>
