<div class="col-left sider-menu">
	
	<aside id="categories" class="widget">
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

					<?php endforeach ?>	
				</li>
		</ul>
	</aside>

</div>

