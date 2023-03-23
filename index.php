<?php
/**
 * Index.
 */
?>

<?php get_header(); ?>
<main class="site-content" role="main">

    <div class="section-inner">

        <?php
        if( is_front_page()) {
            //https://localhost:8888/{nomesito}/{tema}/featured-post.php
            include( TEMPLATEPATH . '/featured-posts.php' );
        }
        ?>

        <ul class="post-list">

            <?php
            //Start loop.
            while ( have_posts() ) :
                the_post();
                if ( $post->ID !== $featured_id ) : ?>
                    <li>
                         <div class="post-thumb">
                            <?php
                            // size: thumbnail - medium - large - medium-large - full
                            the_post_thumbnail( 'thumbnail' ); ?>
                        </div>

                        <div class="post-entry">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php

                        the_time( 'F, j, Y', '<time>', '</time>' );
                        ?>
                  </div>
                </li>
                    <?php endif; endwhile; ?>
        </ul>       
            

        <?php the_posts_pagination( array (
            'prev_text' => '<span class="older-posts">Meno recenti</span>',
            'next_text' => '<span class="newer-posts">Più recenti</span>',
             ),
        );
        ?>

    </div>

</main>

<?php get_footer(); ?>
