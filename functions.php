<?php
// Register Nav Menu
function my_custom_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-custom-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

// Enqueue Scripts and Styles
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_styles' );

// Breadcrumb Function
function my_custom_breadcrumb() {
    if (!is_home()) {
        echo '<a href="' . home_url() . '">Home</a> » ';
        if (is_category() || is_single()) {
            the_category(' » ');
            if (is_single()) {
                echo ' » ';
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}
?>
