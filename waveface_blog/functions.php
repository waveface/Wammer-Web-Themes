<?php 

function add_post_classes( $classes ) {

	$classes[] = 'post-blog';

	return $classes;
}
add_filter( 'post_class', 'add_post_classes' );




function add_body_classes( $classes ) {

	$classes[] = 'waveface-blog';

	return $classes;
}
add_filter( 'body_class', 'add_body_classes' );

?>