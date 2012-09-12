<aside role="complementary" id="sidebar">
<h6 class="screen-reader-text">Sidebar</h6>                

<?php if ( ! dynamic_sidebar('sidebar_main') ) : ?>   

	<!-- Basic sidebar fields in case the Sidebar Widgets haven't been added -->
   <li id="search" class="widget widget_search">
   <form id="searchform" class="blog-search" method="get" action="#">
					<div>
						<input id="s" name="s" type="text" class="text" value="" size="10" tabindex="1" />
						<input type="submit" class="button" value="Find" tabindex="2" />
					</div>
				</form>
	</li>
    
    <li id="categories-2" class="widget widget_categories"><h3 class="widgettitle">Categories</h3>		<ul>
	<li class="cat-item cat-item-3"><a href="http://localhost:8888/wp-dev/category/communications/" title="View all posts filed under Communications News">Communications News</a>
</li>
	<li class="cat-item cat-item-4"><a href="http://localhost:8888/wp-dev/category/distance-education/" title="View all posts filed under Distance Education News">Distance Education News</a>
</li>
	<li class="cat-item cat-item-73"><a href="http://localhost:8888/wp-dev/category/feature/" title="View all posts filed under Feature">Feature</a>
</li>
	<li class="cat-item cat-item-5"><a href="http://localhost:8888/wp-dev/category/technology/" title="View all posts filed under Technology News">Technology News</a>
</li>
	<li class="cat-item cat-item-1"><a href="http://localhost:8888/wp-dev/category/uncategorized/" title="View all posts filed under Uncategorized">Uncategorized</a>
</li>
		</ul>
</li>

    
<?php endif; ?>

</aside>
