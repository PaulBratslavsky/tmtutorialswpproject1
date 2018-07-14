<?php get_header(); ?>
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