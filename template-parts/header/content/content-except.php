<?php
/**
 * Except.
 */
?>

<li>
                <div class="post-thumb">
                    <?php tema_ied_post_thumbnail( 'thumbnail' ); ?>
                </div>

                <div class="post-entry">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a>
                    <time datetime=""><?php the_time( 'F, j, Y' ); ?></time>
                    <small><?php the_excerpt(); ?></small>
                </div>
            </li>