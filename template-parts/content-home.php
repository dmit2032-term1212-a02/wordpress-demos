<?php
/**
 * Template part/partial for displaying content for your homepage.
 * 
 * @package 1212 wp demos A02
 * @since 1.0.0
 */
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <!-- display the page content -->
    <div class="content">
        <!-- display the page or post content -->
        <?php the_content(); ?>
    </div>
    <!-- method #1 to display text field (heading) -->
    <h2><?php the_field('course_title'); ?></h2>



    <!-- display custom content -->
    <!-- argument for displaying your custom loop -->
    <?php
        $args = array(
            'post_type'     => 'courses',
            'posts_per_page'    => 4, //display # of posts
        );
        $course_query = new WP_Query ($args);
    ?>

    <!-- loop for displaying custom content -->
    <?php if ( $course_query->have_posts() ) :?>
        <?php while ( $course_query->have_posts() ) : $course_query->the_post(); ?>
            <!-- add content -->
            <?php the_title('<h3>','</h3>'); ?>
            <?php the_excerpt(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e('Sorry, no post matched your criteria');?></p>
    <?php endif; ?>


</article>
