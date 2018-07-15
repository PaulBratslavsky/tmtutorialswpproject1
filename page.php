<?php get_header(); ?>
 <div class="main page">
        <div class="container" >
            <!-- Checks for Posts -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <article class="single-page">
                        <div class="col-one-single-page">
                            
                            <h3>
                                <?php the_title(); ?>
                            </h3>  
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="single-page-thumb-lg">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>

                            <div class="single-page-container">
                                <div class="single-page-content">
                                    <p><?php the_content(); ?></p>
        
                                    <a class="button" href="http://tmtutorialswpproject1.local/">
                                        Back
                                    </a>
                                </div>

                                <div class="single-page-sidebar">
                                    <?php if ( is_active_sidebar('sidebar') ) : ?>
                                        <?php dynamic_sidebar( 'sidebar' ); ?>
                                    <?php else : ?>
                                        <p> No widgets found </p>

                                    <?php endif; ?>
                                </div>
                            </div>
                            

                            
                        </div>
                        
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop( 'Sorry, No posts were found!'); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>
