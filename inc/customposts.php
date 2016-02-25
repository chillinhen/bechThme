<?php

add_action( 'init', 'create_teaser_types_taxonomy', 0 );
function create_teaser_types_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'popular_items' => __( 'Popular Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'separate_items_with_commas' => __( 'Separate types with commas' ),
    'add_or_remove_items' => __( 'Add or remove types' ),
    'choose_from_most_used' => __( 'Choose from the most used types' ),
    'menu_name' => __( 'Types' ),
  );
  // Now register the non-hierarchical taxonomy like tag

  register_taxonomy('types','teaser',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}

//create custom posts

//Teaser
add_action('init', 'my_custom_post_teaser');
function my_custom_post_teaser() {
    $labels = array(
        "name" => "Teaser",
        "singular_name" => "Teaser",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Teaserschnipsel mit Bild und Text, für interne und externe Verlinkungen ",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "teaser", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("teaser", $args);
}

//carousels
add_action('init', 'my_custom_post_carousel');
function my_custom_post_carousel() {
    $labels = array(
        "name" => "Carousel",
        "singular_name" => "Carousel",
    );
    $args = array(
        "labels" => $labels,
        "description" => "Carousel für die Startseite/n",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "carousel-item", "with_front" => true),
        "query_var" => true,
        "supports" => array("title","editor", "custom-fields", "revisions", "thumbnail", "author"),
        "taxonomies" => array('category', 'post_tag'));
    register_post_type("carousel-item", $args);
}

//Lizenzen
add_action('init', 'my_custom_post_license');
function my_custom_post_license() {
    $labels = array(
        "name" => "Lizenzen",
        "singular_name" => "Lizenz",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Lizenzen mit Bild und Vorschau",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "license", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "revisions", "author", "page-attributes"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("license", $args);
}

//Buttons
add_action('init', 'my_custom_post_button');
function my_custom_post_button() {
    $labels = array(
        "name" => "Buttons",
        "singular_name" => "Button",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Buttons",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "button", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "revisions", "author", "page-attributes"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("button", $args);
}

//Contact Data
add_action('init', 'my_custom_post_contact');
function my_custom_post_contact() {
    $labels = array(
        "name" => "Kontaktdaten",
        "singular_name" => "Kontaktdaten",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Kontaktdaten im Footer",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "contact", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "revisions", "author", "page-attributes"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("contact", $args);
}

?>
