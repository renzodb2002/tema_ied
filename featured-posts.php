<?php
/**
 * Featured-Post
 */

$args = array(
    'post_per_page' => 1,
);

$feature_post = new WP_Query( $args );

if ($feature_post->have_posts()) {
    while( $feature_post->have_posts() ) {
        $feature_post->the_post();
        // Post ID.
        $feature_id = $post->ID;
    ?>

    <article class="blog-entry content-block">
        <header class="blog-entry__header">
            <div class="blog-entry__header__category">
                <?php the_category(); ?>
            </div>
            <a class="blog-entry__header_link" href="<?php the_permalink(); ?>">
                <h1 class="blog-entry__header__title"><?php the_title(); ?></h1>
            </a>
            <time datetime=""><?php the_time( 'F j, Y' ); ?></time>
        </header>
    </article>

<?php }  //while.
} //if.
?>