<?php

// Crear Ubicación de Menú
// Generate WP - https://generatewp.com/nav-menus/

// WP docs - https://developer.wordpress.org/reference/functions/register_nav_menus/

if ( ! function_exists( 'ubicacion_menu' ) ) {
  function ubicacion_menu() {
    $locations = array(
      'ubicacion' => __( 'Ubicacion', 'ubicacion_menu' ),
    );
    register_nav_menus( $locations );
  }
  add_action( 'init', 'ubicacion_menu' );
}
