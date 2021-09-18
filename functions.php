<?php

function theme_support() {
  register_nav_menus( [
    'primary' => __("Primary Menu"),
    'footer' => __("Footer Menu")
  ] );

  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'post-formats', ['aside', 'gallery', 'link'] );
}
add_action( 'after_setup_theme','theme_support' );

function theme_excerpt_length() {
  return 25;
}
add_filter( 'excerpt_length', 'theme_excerpt_length' );