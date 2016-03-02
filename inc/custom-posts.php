<?php 
//Impressum
#add_action('init', 'my_custom_post_impressum');
function my_custom_post_impressum() {
    $labels = array(
        "name" => "Impressum",
        "singular_name" => "Impressum",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Impressumschnipsel mit Bild und Text, für interne und externe Verlinkungen ",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "impressum", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("impressum", $args);
}
?>