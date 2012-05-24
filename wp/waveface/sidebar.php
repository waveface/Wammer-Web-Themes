<div class="col-left sider-menu">
	
	<aside id="categories" class="widget">
		<ul>
				<?php $categories = get_categories('orderby=order'); ?> 

				<?php foreach ($categories as $c): ?>
				<li>	
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
