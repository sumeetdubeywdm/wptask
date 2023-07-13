<?php

function u_enqueue(){
   
    wp_register_style('wp_style',get_theme_file_uri('assets/css/style.css'));
    wp_register_style('wp_fonts_style',get_theme_file_uri('assets/css/fonts.css'));
    wp_register_style('wp_mqm_style',get_theme_file_uri('assets/css/media-queries-medium.css'));
    wp_register_style('wp_mqs_style',get_theme_file_uri('assets/css/media-queries-small.css'));
    wp_register_style('wp_mq_style',get_theme_file_uri('assets/css/media-queries.css'));
    wp_register_style('wp_mql_style',get_theme_file_uri('assets/css/media-querieslarge.css'));

    // wp_register_style('wp_style',get_theme_file_uri('assets/public/index.css'));

    // wp_enqueue_style('u_font_rubik_pacifico');
    // wp_enqueue_style('wp_bootstrap_icons');
    wp_enqueue_style('wp_style');
    wp_enqueue_style('wp_fonts_style');
    wp_enqueue_style('wp_mqm_style');
    wp_enqueue_style('wp_mqs_style');
    wp_enqueue_style('wp_mq_style');
    wp_enqueue_style('wp_mql_style');
    
  
}