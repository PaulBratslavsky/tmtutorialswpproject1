<?php get_header(); ?>
 <div class="main">
        <div class="container" >
            <!-- Checks for Posts -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <article class="article-single-post">
                        <div class="col-one-single">
                            <?php if( has_post_thumbnail() ) : ?>
                                <div class="post-thumb-lg">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            
                        </div>

                        <div class="col-two-single">
                            <h3>
                                <?php the_title(); ?>
                            </h3>   
                            
                            <div class="meta">
                                <small>Created by <?php the_author(); ?> on <?php the_date(); ?> at <?php the_time(); ?>.</small>
                            </div> 
                            <p><?php the_content(); ?></p>
    
                            <a class="button" href="http://tmtutorialswpproject1.local/index.php/blog/">
                                Back
                            </a>                            
                        </div>

    
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop( 'Sorry, No posts were found!'); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>
