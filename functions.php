<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_parent_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_compiled_styles');

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/css/theme.min.css' );
}

function enqueue_parent_scripts() {
   wp_enqueue_script( 'parent-scripts', get_template_directory_uri().'/js/theme.min.js' );
}

function enqueue_compiled_styles() {
  wp_enqueue_style( 'fm-sass-main',
    get_stylesheet_directory_uri().'/stylesheets/fm_style.css'
  );
}
