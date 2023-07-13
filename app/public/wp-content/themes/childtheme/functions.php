<?php 

// Varaible 


// Includes

include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/svgUpload.php'));


// hooks


add_filter( 'upload_mimes', 'custom_allow_svg_upload' );

add_action('wp_enqueue_scripts','u_enqueue');
