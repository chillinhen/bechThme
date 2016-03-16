<?php
require_once('inc/custom-posts.php');
require_once('inc/customizer.php');
//
//ACF Theme Options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'position' => '63.3',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
// Childtheme Setup
add_action('after_setup_theme', 'bechold_theme_setup');

function bechold_theme_setup() {

//remove scrap
    remove_filter('show_admin_bar', 'remove_admin_bar');
    remove_action('init', 'create_post_type_html5');
    
  //new Image Formats
    add_image_size('full', 1680, 560, array( 'center', 'center' ));
    add_image_size('thumb-loop', 235, 235, true);
    add_image_size('thumb-detail',500,645,true);
    
    // Adding Translation Option
    load_theme_textdomain('bechholdTheme', get_stylesheet_directory_uri() . '/languages');
    

    
            // init styles
    function theme_styles() {
        wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('parent-style'); // Enqueue it!

        wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all');
        wp_enqueue_style('bootstrap'); // Enqueue it!

        wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,400italic,600italic,900', array(),'all');
        wp_enqueue_style('googlefont'); // Enqueue it!

        wp_register_style('fontawseome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', array(),'all');
        wp_enqueue_style('fontawseome'); // Enqueue it!

        wp_register_style('child-style', get_stylesheet_directory_uri() . '/css/screen.css', array('parent-style', 'bootstrap', 'googlefont', 'fontawseome'), '1.0', 'all');
        wp_enqueue_style('child-style'); // Enqueue it!
    }
    add_action('wp_enqueue_scripts', 'theme_styles');
    //deregister old and register new modernizer
    add_action('wp_enqueue_scripts', 'register_modernizr');

    function register_modernizr() {
        wp_deregister_script('modernizr');
        wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', '2.8.3', true);
    }
    
    // init child theme scripts
    function theme_scripts() {
        if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

            wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.6'); // Bootstrap
            wp_enqueue_script('bootstrap'); // Enqueue it!

            wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('bootstrap'), '1.2', true); // Custom Script
            wp_enqueue_script('custom'); // Enqueue it!
        }
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');
    
    // init conditional scripts
    function conditonal_enqueue_scripts() {

        wp_enqueue_script('html5shiv', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js');
        wp_script_add_data('html5shiv', 'conditional', 'lt IE 7');
    }
    
    //additional Menus
    add_action('init', 'register_my_menu');
    function register_my_menu() {
        unregister_nav_menu('sidebar-menu');
    }
    
    //remove current sidebars
    add_action('init', 'remove_sidebars');
    function remove_sidebars() {
        unregister_sidebar('Widget Area 1');
        unregister_sidebar('Widget Area 2');
    }
}

?>
