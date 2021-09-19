<?php

function theme_support() {
  
  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'post-formats', ['aside', 'gallery', 'link'] );
  
  register_nav_menus( [
    'primary' => __("Primary Menu"),
    'footer' => __("Footer Menu")
  ] );

}
add_action( 'after_setup_theme','theme_support' );

function theme_register_sidebars() {

    register_sidebar( [
      'name' => __('Sidebar'),
      'id' => 'sidebar',
      'before_widget' => '<div class="block side-widget">',
      'after_widget' => '</div>',
    ] );

    register_sidebar( [
      'name' => __('Box 1'),
      'id' => 'box_1',
      'before_widget' => '<div class="block side-widget">',
      'after_widget' => '</div>',
    ] );

    register_sidebar( [
      'name' => __('Box 2'),
      'id' => 'box_2',
      'before_widget' => '<div class="block side-widget">',
      'after_widget' => '</div>',
    ] );

    register_sidebar( [
      'name' => __('Box 3'),
      'id' => 'box_3',
      'before_widget' => '<div class="block side-widget">',
      'after_widget' => '</div>',
    ] );
}
add_action('widgets_init', 'theme_register_sidebars');

function theme_excerpt_length() {
  return 25;
}
add_filter( 'excerpt_length', 'theme_excerpt_length' );


// FUNCTIONS

function get_top_parent( $post ) {
  if( $post->post_parent ) {
    $ancestors = get_post_ancestors( $post->ID );
    $result = $ancestors[0];
  } else {
    $result = $post->ID;
  }
  return $result;
}

function page_is_parent( $post ) {
  return count( get_pages( ['child_of' => $post->ID ] ) );
}