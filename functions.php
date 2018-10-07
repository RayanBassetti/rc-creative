<?php 

add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

function theme_scripts_styles() {

  wp_enqueue_script( 'my-scripts', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0', true );

}

?>