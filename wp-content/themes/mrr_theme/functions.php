<?php
require_once('wp-bootstrap-navwalker.php');
require_once(get_template_directory().'/inc/enqueue.php');

//css link from here
function mrr_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mrr_resources');


function mrr_setup(){

 register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer'  => __( 'Footer Menu' ),
  
	));
 add_theme_support('post-thumbnails');
 add_image_size('small-thumbnail', 120, 120, true);
 add_image_size('medium-image', 600,150,true);
 add_image_size('banner-image',1150, 310, array('left','top'));

 // Add Post format Support
 add_theme_support('post-formats', array('aside','gallery','link'));
}
add_action('after_setup_theme', 'mrr_setup');

//excerpt custome length
function custom_excerpt_length(){
  return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length');

/*
===========================
     CUSTOM POST TYPE
===========================
*/

function awesome_custome_post_type(){

	$labels = array(

	    'name' => 'Career',
	    'singular_name' => 'Career',
	    'add_new' => 'Add New Career',
	    'all_items' => 'All Items',
	    'add_new_item' => 'Add Item',
	    'edit_item'  => 'Edit Item',
	    'new_item' => 'New Item',
	    'view_item' => 'View Item',
	    'search_item' => 'Search Career',
	    'not_found' => 'No Items Found',
	    'not_found_in_trash' => 'No Items Found in Trash',
	    'parent_item_colon' => 'Parent Item'
	);

	$args = array(

	    'labels' => $labels,
	    'public' => true,
	    'has_archieve' => true,
	    'publicly_queryable' => true,
	    'query_var' => true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'supports' =>array(
	    	'title',
	    	'editor',
	    	'excerpt',
	    	'thumbnail',
	    	'revision',
        ),

	    'taxonomies' => array('category', 'post_tag'),
	    'menu_position' => 5,
	    'exclude_from_search' => false

	);
	register_post_type('career', $args);


	$labels = array(

	    'name' => 'Event',
	    'singular_name' => 'Event',
	    'add_new' => 'Add New Event',
	    'all_items' => 'All Items',
	    'add_new_item' => 'Add Item',
	    'edit_item'  => 'Edit Item',
	    'new_item' => 'New Item',
	    'view_item' => 'View Item',
	    'search_item' => 'Search Career',
	    'not_found' => 'No Items Found',
	    'not_found_in_trash' => 'No Items Found in Trash',
	    'parent_item_colon' => 'Parent Item'
	);

	$args = array(

	    'labels' => $labels,
	    'public' => true,
	    'has_archieve' => true,
	    'publicly_queryable' => true,
	    'query_var' => true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'hierarchical' => false,
	    'supports' =>array(
	    	'title',
	    	'editor',
	    	'excerpt',
	    	'thumbnail',
	    	'revision',
        ),

	    'taxonomies' => array('category', 'post_tag'),
	    'menu_position' => 6,
	    'exclude_from_search' => false
	    
	);
	register_post_type('event', $args);
}
add_action('init', 'awesome_custome_post_type');

/*
=============================
           SIDEBAR
=============================
*/

function mywidgetsinit(){

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' =>'<h4 class="my-special-class">',
		'after_title' => '</h4>'
		));

	register_sidebar(array(
		'name' => 'Footer Area1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' =>'<h4 class="my-special-class">',
		'after_title' => '</h4>'
		));
    
}
add_action('widgets_init','mywidgetsinit');































/*
=====================
     ADMIN PAGE
=====================
*/
//'first parameter is page title','2nd id menu title','3rd is capability-> allow user ability','4th is menu slug appears in nevigation bar','5th is functions thats developer call and trigger from newly develop custom themes','6th is dashicons', '7th is position of our menu in Dashbord'.
function kalika_add_admin_page(){
 //Generate Kalika Admin Page
	add_menu_page('Kalika Theme Option','Theme Option','manage_options','custom_theme','kalika_theme_create_page','dashicons-admin-generic',110);

 //Generate Kalika Admin Submenu pages
	// '1st string $parent_slug','2.string $page_title','3.String menu_title','4.string $Capability', '5.string $menu_slug','6.callback $function'
	add_submenu_page('custom_theme','Kalika Theme Option','General Input','manage_options','custom_theme','kalika_theme_create_page');

	add_submenu_page('custom_theme','Kalika Theme Option','Settings','manage_options','custom_theme_settings','kalika_theme_settings_page');

	//Activate Custom Settings
	add_action('admin_init','kalika_custom_settings');

}
add_action('admin_menu', 'kalika_add_admin_page');

// input fields in Theme Option
function kalika_custom_settings(){

register_setting('kalika-settings-group','site_logo');
register_setting('kalika-settings-group','full_name');
register_setting('kalika-settings-group','tel_number');
register_setting('kalika-settings-group','mob_number');
register_setting('kalika-settings-group','address');
register_setting('kalika-settings-group','mail');
register_setting('kalika-settings-group','facebook_handler');
register_setting('kalika-settings-group','twitter_handler','kalika_sanitize_twitter_handler');
register_setting('kalika-settings-group','gplus_handler');
register_setting('kalika-settings-group','instagram_handler');
register_setting('kalika-settings-group','picture');
register_setting('kalika-settings-group','abt-des');


add_settings_section('kalika-sidebar-options','Sidebar Options','kalika_sidebar_options','custom_theme');

add_settings_field('sidebar-logo','Logo','kalika_sidebar_logo','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-name','Full Name','kalika_sidebar_name','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-telephone','Telephone No.','kalika_sidebar_telephone','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-mobile','Mobie No.','kalika_sidebar_mobile','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-address','Address','kalika_sidebar_address','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-mail','Email','kalika_sidebar_mail','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-facebook','Facebook Id','kalika_sidebar_facebook','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-twitter','Twitter Id','kalika_sidebar_twitter','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-gplus','Google+ Id','kalika_sidebar_gplus','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-instagram','Instagram Id','kalika_sidebar_instagram','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-picture','About Image','kalika_sidebar_picture','custom_theme','kalika-sidebar-options');
add_settings_field('sidebar-des','About Description','kalika_sidebar_des','custom_theme','kalika-sidebar-options');
}

function kalika_sidebar_options(){
	echo 'Customize your sidebar information';
}

function kalika_sidebar_logo(){
	$logo = esc_attr( get_option( 'site_logo' ));
	if( empty($logo)){
		echo '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-button"><input type="hidden" id="select-logo" name="site_logo" value="" />';

	} else{
		echo '<input type="button" class="button button-secondary" value="Replace Logo" id="upload-button"><input type="hidden" id="select-logo" name="site_logo" value="'.$logo.'" /> <input type="button" class="button button-secondary" value="Remove logo" id="remove-logo">';
	}
	
}

function kalika_sidebar_name(){
	$fullName = esc_attr( get_option( 'full_name' ));
	echo '<input type="text" name="full_name" value="'.$fullName.'" placeholder="Full Name"/>';
}

function kalika_sidebar_telephone(){
	$telephone = esc_attr( get_option( 'tel_number' ));
	echo '<input type="number" name="tel_number" value="'.$telephone.'" placeholder="Telephone Number"/>';
}

function kalika_sidebar_mobile(){
	$mobile = esc_attr( get_option( 'mob_number' ));
	echo '<input type="number" name="mob_number" value="'.$mobile.'" placeholder="Mobile Number"/>';
}

function kalika_sidebar_address(){
	$address = esc_attr( get_option( 'address' ));
	echo '<input type="text" name="address" value="'.$address.'" placeholder="Company Address"/>';
}

function kalika_sidebar_mail(){
	$mail = esc_attr( get_option( 'mail' ));
	echo '<input type="email" name="mail" value="'.$mail.'" placeholder="Company Email"/>';
}

function kalika_sidebar_facebook(){
	$facebook = esc_attr( get_option( 'facebook_handler' ));
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Insert Facebook Id"/>';
}

function kalika_sidebar_twitter(){
	$twitter = esc_attr( get_option( 'twitter_handler' ));
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Insert Twitter Id"/><p class="description">Input your Twitter Id without @ Character</p>';
}

function kalika_sidebar_gplus(){
	$gplus = esc_attr( get_option( 'gplus_handler' ));
	echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Insert Google+ Id"/>';
}

function kalika_sidebar_instagram(){
	$instagram = esc_attr( get_option( 'instagram_handler' ));
	echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Insert Instagram Id"/>';
}

function kalika_sidebar_picture(){
	$img = esc_attr( get_option( 'picture' ));
	if( empty($img)){

	echo '<input type="button" class="button button-secondary" value="Upload Picture" id="upload-button1"><input type="hidden" id="select-pic" name="picture" value="" />';
   }else{

     echo '<input type="button" class="button button-secondary" value="Upload Picture" id="upload-button1"><input type="hidden" id="select-pic" name="picture" value="'.$img.'" /> <input type="button" class="button button-secondary" value="Remove Picture" id="remove-pics">';
    }
}

function kalika_sidebar_des(){
	$des = esc_attr( get_option( 'abt-des' ));
	echo '<input type="text" name="abt-des" value="'.$des.'" placeholder="Insert Few About Descreption "/>';
}


//Sanitization settings
function kalika_sanitize_twitter_handler( $input ){
    $output = sanitize_text_field( $input );
    $output = str_replace('@','',$output);
    return $output;
}







function kalika_theme_create_page(){
	require_once(get_template_directory().'/inc/admin-templates/kalika-admin.php');

}

function kalika_theme_settings_page(){
	echo '<h1>Kalika Theme Options Setting</h1>';

}