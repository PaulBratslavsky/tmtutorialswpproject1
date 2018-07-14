<?php 
    function theme_setup() {
        // Add Feature Image Support
        add_theme_support( 'post-thumbnails' );
        
        // Add Menu Support
        register_nav_menus( array(
            'primary' => __( 'Primary Menu' )
        ) );
    }

    // Executes The Functions 
    add_action( 'after_setup_theme', 'theme_setup' );

    // Change Excerpt Length
    function custom_excerpt_length() {
        return 18;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length' );
?>

