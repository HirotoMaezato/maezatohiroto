<?php

function init_func() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

}

add_action('init', 'init_func');

function custom_excerpt_length( $length ) {
     return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
	return '.....';
}
add_filter('excerpt_more', 'new_excerpt_more');
