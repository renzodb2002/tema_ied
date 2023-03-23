<?php
/**
 * Single Theme.
 */
?>

<?php get_header(); ?>


<main class="site-content" role="main">
    <?php if( have_posts() ) : ?>

        <div class="section-inner">

        <?php while(have_posts() ) :
            the_post(  ); ?>
            
        <article class="blog-entry content-block">

            <header class="blog-entry__header">
                <div class="blog-entry__header__category">
                    <?php the_category( ',' ); ?>
                </div>
                <h1 class="blog-entry__header__title"><?php the_title(); ?></h1>
                <time datetime=""><?php the_time( 'F,j,Y', '<time>', '</time>'); ?></time>
            </header>
            
            <?php
            tema_ied_post_thumbnail( 'large' );
            //Contenuto
            the_content(); ?>

    <?php if ( has_tag() ) : ?>
        <div class="tags-widget">
            
            <?php 
            // TAG
            the_tags( '<ul><li>', '</li><li>', '</ul>' ); 
            ?>

        </div>
        <?php endif; ?>

        <!-- /blog-entry -->
        </article> 

    <?php endwhile; ?>

    </div>

    <?php endif; ?>
</main>

<?php get_footer(); 

?>
