<?php

require_once('inc/custom-posts.php');
require_once('inc/customizer.php');
//
//ACF Theme Options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'position' => '63.3',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// add category nicenames in body and post class
function category_id_class($classes) {
    global $post;
    foreach (get_the_category($post->ID) as $category) {
        $classes[] = $category->category_nicename;
    }
    return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');
// Childtheme Setup
add_action('after_setup_theme', 'bechold_theme_setup');

function mv_browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if ($is_lynx)
        $classes[] = 'lynx';
    elseif ($is_gecko)
        $classes[] = 'gecko';
    elseif ($is_opera)
        $classes[] = 'opera';
    elseif ($is_NS4)
        $classes[] = 'ns4';
    elseif ($is_safari)
        $classes[] = 'safari';
    elseif ($is_chrome)
        $classes[] = 'chrome';
    elseif ($is_IE) {
        $classes[] = 'ie';
        if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
            $classes[] = 'ie' . $browser_version[1];
    } else
        $classes[] = 'unknown';
    if ($is_iphone)
        $classes[] = 'iphone';
    if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
        $classes[] = 'osx';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
        $classes[] = 'linux';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
        $classes[] = 'windows';
    }
    return $classes;
}

add_filter('body_class', 'mv_browser_body_class');

function bechold_theme_setup() {

//remove scrap
    remove_filter('show_admin_bar', 'remove_admin_bar');
    remove_action('init', 'create_post_type_html5');

    //new Image Formats
    add_theme_support('post-thumbnails');
    add_image_size('small', 350, 350, array('center', 'center')); // Small Thumbnail
    add_image_size('medium', 400, 400, array('center', 'center')); // Medium Thumbnail
    add_image_size('large', 500, 645, array('top', 'center')); // Large Thumbnail
    add_image_size('thumb-subpages-small', 215,215);
    add_image_size('thumb-subpages-medium', 230 ,230);
    add_image_size('thumb-subpages-large', 500,500);


    add_image_size('custom-size', 1680, 1280, array('center', 'center')); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    #add_image_size('full', 1680, 1280, array('center', 'center'));
    add_image_size('thumb-loop', 400, 400, array('center', 'center'));
    #add_image_size('thumb-subpages', 500, 645, array('center', 'center'));
    #add_image_size('thumb-detail', 570, 455, array('center', 'center'));
    // Adding Translation Option
    load_theme_textdomain('bechholdTheme', get_stylesheet_directory_uri() . '/languages');

    //deregister old and register new modernizer
    function register_modernizr() {
        wp_deregister_script('modernizr');
        wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', '2.8.3', true);
    }

    add_action('wp_enqueue_scripts', 'register_modernizr');

    // init conditional scripts
    function conditonal_enqueue_scripts() {

        wp_enqueue_script('html5shiv', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js');
        wp_script_add_data('html5shiv', 'conditional', 'IE');
    }

    add_action('wp_enqueue_scripts', 'conditonal_enqueue_scripts');

    // init child theme scripts
    function theme_scripts() {
        if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

            wp_register_script('flexslider', get_stylesheet_directory_uri() . '/flexslider/jquery.flexslider.js', array('jquery'), false, true);
            wp_enqueue_script('flexslider');

            wp_register_script('gray', get_stylesheet_directory_uri() . '/js/jquery.gray.min.js', array(), '1.2', true); // Custom Script
            wp_enqueue_script('gray'); // Enqueue it!

            wp_register_script('webfontloader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js', array('jquery'), false, false);
            wp_enqueue_script('webfontloader');

            wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('flexslider'), '1.2', true); // Custom Script
            wp_enqueue_script('custom'); // Enqueue it!
        }
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');

    // init styles
    function theme_styles() {
//        global $wp_styles;
        wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('parent-style'); // Enqueue it!

        wp_register_style('flexslider', get_stylesheet_directory_uri() . '/flexslider/flexslider.css', array(), false, 'screen');
        wp_enqueue_style('flexslider');

        wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', array(), false, 'all');
        wp_enqueue_style('googlefont'); // Enqueue it!


        wp_register_style('fontawseome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', array(), 'all');
        wp_enqueue_style('fontawseome'); // Enqueue it!

        wp_register_style('gray', get_stylesheet_directory_uri() . '/css/gray.min.css', array(), '1.0', 'all');
        wp_enqueue_style('gray');

        wp_register_style('child-style', get_stylesheet_directory_uri() . '/css/screen.css', array('parent-style', 'flexslider', 'fontawseome'), '1.0', 'all');
        wp_enqueue_style('child-style'); // Enqueue it!
//
//        wp_enqueue_style('ie', get_stylesheet_directory_uri() . "/css/ie.css", array('child-style'));
//        $wp_styles->add_data('ie', 'conditional', 'IE');
    }

    add_action('wp_enqueue_scripts', 'theme_styles');


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

    // Custom View Article link to Post
    function bech_view_article($more) {
        global $post;
        return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('mehr Infos', 'bechholdTheme') . '</a>';
    }

    remove_filter('excerpt_more', 'html5_blank_view_article');
    add_filter('excerpt_more', 'bech_view_article');
}

?>
