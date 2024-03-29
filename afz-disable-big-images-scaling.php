<?php

/**
* Plugin Name: Disable big images scaling
* Description: Disable big images scaling.
* Version: 1.0.0
* Author: Álvaro Franz
* GitHub Plugin URI: https://github.com/alvarofranz/afz-disable-big-images-scaling
**/

// Disable scaling
add_filter( 'big_image_size_threshold', '__return_false' );

// Change default image library
function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );