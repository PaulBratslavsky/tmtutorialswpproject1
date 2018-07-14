<?php get_header(); ?>
<body>
    <header>
        <div class="container flex-menu" >
            <div class="logo">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <span><?php bloginfo( 'description' ); ?></span>
            </div>

            <div class="menu">
                <nav class="main-nav">
                   <ul>
                       <li>Home</li>
                       <li>About</li>
                       <li>Adopt</li>
                       <li>Donate</li>
                       <li>Contact</li>
                       <li>Blog</li>
                   </ul>
                </nav>
            </div>
        </div>
    </header>
    

    <div class="main">
        <div class="container" >
            <!-- Checks for Posts -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <article class="posts">
                        <div class="col-one">
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>   
                            
                            <div class="meta">
                                <small>Created by <?php the_author(); ?> on <?php the_date(); ?> at <?php the_time(); ?>.</small>
                            </div> 
                            <p><?php the_excerpt(); ?></p>
                            <a class="button" href="<?php the_permalink(); ?>">
                                Read More
                            </a>
                        </div>

                        <div class="col-two">
                            <?php if( has_post_thumbnail() ) : ?>
                                <div class="post-thumb-sm">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop( 'Sorry, No posts were found!'); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>