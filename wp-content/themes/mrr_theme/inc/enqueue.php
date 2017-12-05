<?php

/*
================================
     ADMIN ENQUEUE FUNCTIONS
================================
*/

function kalika_load_admin_scripts( $hook ){
     
     if('toplevel_page_custom_theme' !=$hook){
      return;
     }

	wp_register_style('kalika_admin', get_template_directory_uri() . '/assets/css/kalika-admin.css',array(),'1.0.0','all');
	wp_enqueue_style('kalika_admin');

	wp_register_style('kalika_admin', get_template_directory_uri() . '/assets/css/kalika.admin.css',array(),'1.0.0','all');
	wp_enqueue_style('kalika_admin');


	wp_enqueue_media();

	wp_register_script('kalika-admin-script', get_template_directory_uri() . '/assets/js/kalika-admin.js',array('jquery'),'1.0.0', true);
	wp_enqueue_script('kalika-admin-script');

	wp_register_script('kalika-admin-script1', get_template_directory_uri() . '/assets/js/kalika.admin.js',array('jquery'),'1.0.0', true);
	wp_enqueue_script('kalika-admin-script1');
	

}
add_action('admin_enqueue_scripts','kalika_load_admin_scripts');