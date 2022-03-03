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
    <!-- displaying the title of the post or page -->
    <?php
        the_title(
            sprintf('<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>');
    ?>
    <!-- if statement below only displays additional content if it is a post type template. Pages will only display a title -->
    <?php if ( 'post' == get_post_type() ) : ?>
        <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
        <p><?php the_date(); ?></p>
        <?php the_category(); ?>
        <p><?php the_excerpt(); ?></p>

    <?php endif; ?>
</div>
