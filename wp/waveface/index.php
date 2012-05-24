<?php get_header(); ?>

<?php 

	if(is_home()) {
		query_posts( 'cat=4' );
	} 

	$categories = get_the_category();
?>

<div class="doc">
	<h1>FAQ</h1>

	<aside id="search" class="widget widget_search">
		<?php get_search_form(); ?>
	</aside>


	<div class="col-right">
		
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : ?>

				<?php the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'not-found' ); ?>

		<?php endif; ?>
		
	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>