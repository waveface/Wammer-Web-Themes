<?php get_header(); ?>

<div class="posts">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : ?>

				<?php the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>
			
			<p class="pager"><?php posts_nav_link('&sect;'); ?></p>

		<?php else : ?>

			<?php get_template_part( 'not-found' ); ?>

		<?php endif; ?>
		
	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>