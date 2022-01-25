<?php
namespace parking\Theme;

define( 'MYPROJECT_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once MYPROJECT_THEME_DIR . 'includes/config.php';
include_once MYPROJECT_THEME_DIR . 'includes/meta.php';

// Add other includes to this file as needed.

// Adds the CTA Header type
$obj        = ucfwp_get_queried_object();
$header_type = ucfwp_get_header_type( $obj );

function parking_get_header_content_type( $header_content_type, $obj ) {
	if ( $obj instanceof WP_Post && $obj->post_type === 'cta' ) {
		$header_type = 'cta';
	}
	return $header_content_type;
}

add_filter( 'ucfwp_get_header_type', 'parking_get_header_content_type', 10, 2 );
