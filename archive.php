<?php
/**
 * Archivio.
 */
?>

<?php get_header(); ?>

<main class="site-content" role="main">
<?php if ( have_posts() ) : ?>

    <div class="section-inner">

        <header class="blog-entry__header">
            <h1 class="blog-entry__header__title">
            <?php the_archive_title(); ?>
            </h1>
        </header>


        <ul class="post-list">
            <?php while( have_posts() ) : 
                the_post( );

            // Except
            get_template_part( 'template-parts/content/content', 'except' );

            endwhile;
            ?>
        </ul>

        <?php the_posts_pagination( array (
            'prev_text' => '<span class="older-posts">Meno recenti</span>',
            'next_text' => '<span class="newer-posts">Più recenti</span>',
             ),
        );

        endif; ?>

    </div>

</main>

<?php get_footer(); ?>