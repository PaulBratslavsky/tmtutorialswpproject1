<?php get_header(); ?>
<body>
    <header>
        <div class="container" >
            <h1><?php bloginfo( 'name' ); ?></h1>
            <span><?php bloginfo( 'description' ); ?></span>
        </div>
    </header>

    <div class="main">
        <div class="container" >
            <!-- Checks for Posts -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <h3><?php the_title(); ?></h3>   
                    <div class="meta">
                        <small>Created by <?php the_author(); ?> on <?php the_date(); ?> at <?php the_time(); ?>.</small>
                    </div> 
                    <p><?php the_content(); ?></p>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop( 'Sorry, No posts were found!'); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>