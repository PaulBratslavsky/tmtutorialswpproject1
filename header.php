<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"
    <?php wp_head(); ?>  
</head>

<body>
    <header>
        <div class="container flex-menu" >
            <div class="logo">
                <a href="http://tmtutorialswpproject1.local/"><h1><?php bloginfo( 'name' ); ?></h1></a>
                <!--<span><?php bloginfo( 'description' ); ?></span> -->
            </div>

            <div class="menu">
                <nav class="main-nav">
                    <?php 
                        $menu= array(
                            'theme_location' => 'primary'
                        );
                    ?>
                   
                    <?php wp_nav_menu( $menu ); ?>
            
                </nav>
                
                    

            </div>
        </div>
    </header>