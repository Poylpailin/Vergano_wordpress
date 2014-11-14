<?php
register_nav_menu('main', 'Menu principal'); /* Pour faire apparaître le menu dans le backoffice ! Nom de l'emplacement, Nom du menu tel qu'il va apparaître */
register_nav_menu('secondary', 'Secondaire'); /* Pour faire apparaître un second menu qui se nommera "Secondaire" */

if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

//CustomPostType
function codex_custom_init() {
// Photos
    $labels = array(
        'name' => 'Personnage',
        'singular_name' => 'Personnage',
        'add_new' => 'Ajouter un personnage',
        'add_new_item' => 'Ajouter un personnage',
        'edit_item' => 'Editer un personnage',
        'new_item' => 'Nouveau personnage',
        'all_items' => 'Tous les personnages',
        'view_item' => 'Voir personnage',
        'search_items' => 'Chercher personnage',
        'not_found' => 'Aucun personnage trouvé',
        'not_found_in_trash' => 'Aucun personnage dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Personnage'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'personnage' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),

    );
    register_post_type( 'personnage', $args );
}
add_action('init', 'codex_custom_init');
// Image à la une
if(function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
}

// Register Custom Taxonomy
function custom_taxonomy() {

    $labels = array(
        'name' => _x( 'Genre', 'Genre General Name', 'text_domain' ),
        'singular_name' => _x( 'Genre', 'Genre Singular Name', 'text_domain' ),
        'menu_name' => __( 'Genre', 'text_domain' ),
        'all_items' => __( 'Tous les genres', 'text_domain' ),
        'parent_item' => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon' => __( 'Parent Item:', 'text_domain' ),
        'new_item_name' => __( 'New Item Name', 'text_domain' ),
        'add_new_item' => __( 'Ajouter nouveau genre', 'text_domain' ),
        'edit_item' => __( 'Modifier un genre', 'text_domain' ),
        'update_item' => __( 'Update genre', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items' => __( 'Search Items', 'text_domain' ),
        'add_or_remove_items' => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used' => __( 'Choose from the most used items', 'text_domain' ),
        'not_found' => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy( 'Genre', array( 'personnage' ), $args ); /* genre = nom de la catégorie, personnage = nom du custom post fields */

}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy');

?>