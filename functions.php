<?php

function theme_support() {
  register_nav_menus( [
    'primary' => __("Primary Menu"),
    'footer' => __("Footer Menu")
  ] );
}
add_action( 'after_setup_theme','theme_support' );