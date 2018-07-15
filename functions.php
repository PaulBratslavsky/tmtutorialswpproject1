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

    // Add Widget Location 
    function my_init_widgets( $id ) {
        register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="side-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ) );
    }

    add_action( 'widgets_init', 'my_init_widgets' )
?>

