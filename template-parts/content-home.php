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

    <!-- method #2 -->
    <!-- displaying your heading as a variable --> 
    <!-- set variable to name_field -->
    <?php $course_title = get_field('course_title'); ?>
    <h2>
        <?php if($course_title) {
            _e($course_title);
        } ?>
    </h2>    


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

    <!-- display a link/button to go the courses page -->
    <!-- use acf relation link using array url method -->

    <?php 
        $courses_btn = get_field('course_view_all_button');
        
        if ( $courses_btn ) :
            $course_btn_title = $courses_btn['title'];
            $course_btn_url = $courses_btn['url']; ?>
            <!-- create the link structure with the above variables -->
            <a href="<?php print_r( esc_url( $course_btn_url) ); ?>"><?php print_r( esc_html( $course_btn_title ) ); ?></a>
    <?php endif; ?>


</article>
