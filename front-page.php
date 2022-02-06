<?php
/**
 * The main template for displaying your homepage as a static site 
 * @package 1212 wp demos A02
 * @since 1.0.0 
 */

    //display header
    get_header(); 
 ?>

    <div class="container-full">
        
        <!-- if there are posts then do something -->
      <?php  if( have_posts() ) : ?>
        <!-- while loop - is going to execute code as long as something is true. -->
        <?php  while ( have_posts()) : the_post();
            //add in template tags to display content
            get_template_part('template-parts/content', 'home');
        ?>
        <?php endwhile; ?>
        <!-- closes the while loop -->
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
       <?php endif; ?>

    </div>


<?php get_footer();?>
