<?php
/**
 * Page.
 */
?>

<?php get_header(); ?>

<main class="site-content" role="main">
<?php if ( have_posts() ) : ?>

    <div class="section-inner">
    <?php while( have_posts( ) ) : 
        the_posts(); ?>

        <header class="blog-entry__header">
            <h1 class="blog-entry__header__title">
            <?php the_title(); ?>
            </h1>
        </header>
        
        <p><?php the_content(); ?></p>

        <?php endwhile; ?>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>