<?php
/***
 * 
 * template parital for the search results
 * @package wp demos a02
 * since 1.0.0
 * 
 */
?>

<div class="">
    <?php
        the_title(
            sprintf('<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>');
    ?>
    
    <?php if ( 'post' == get_post_type() ) : ?>
        <p><?php the_date(); ?></p>
        <?php the_category(); ?>
        <p><?php the_excerpt(); ?></p>

    <?php endif; ?>
</div>
