<div class="blog-sider sider-menu">
	
	<aside id="recent-posts" class="widget">
		<h1>Recent Posts</h1>
		<ul>
			
			<?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>

		</ul>
	</aside>
	<aside id="categories" class="widget">
		<h1>Categories</h1>
		<ul>
			<?php $categories = get_categories('orderby=order'); ?> 

			<?php foreach ($categories as $c): ?>

				<?php if ($c->cat_ID == get_query_var( 'cat' ) ): ?>

				<li class="current">
				<?php else:  ?>

				<li>	
				<?php endif ?>

				<h2>
					<a href="<?php echo get_category_link( $c->cat_ID ) ?>">
					<?php echo $c->name ?></a>
				</h2>
				<p><?php echo $c->description ?></p>

			</li>
			
			<?php endforeach ?>	
		</ul>
	</aside>
	
	<aside id="search" class="widget widget_search">
		<h1>Search in Blog</h1>
		<?php get_search_form(); ?>
	</aside>


</div>

