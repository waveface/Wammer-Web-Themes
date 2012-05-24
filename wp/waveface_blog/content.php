	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
	<div class="post-date">
		<span class="day"><?php the_time('d'); ?> </span>
	</div>


			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</header>

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : 
			// Hide category and tag text for pages on Search ?>
			
			<?php
				$categories_list = get_the_category_list(' &times; ');
				if ( $categories_list ):
			?>
			<p class="post-time">
				<i class="icon-time"></i><?php the_date(); ?>
			</p>
			<p class="cat-links">
				<i class="icon-folder-close"></i><?php echo $categories_list ?>

			</p>
			<?php endif; // End if categories ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list('', ' &times; ' );
				if ( $tags_list ): ?>
			<p class="tag-links">
				<i class="icon-tag"></i><?php echo $tags_list ?>

			</p>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
	</article>
