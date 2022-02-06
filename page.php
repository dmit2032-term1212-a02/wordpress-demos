<?php
/**
 * The main template for displaying all of pages (static: about, contact, etc...) 
 * @package 1212 wp demos A02
 * @since 1.0.0 
 */

    //display header
get_header(); ?>

    <!-- add in structural html around the loop - this will be used for all interior pages (ie about, contact, etc) -->
    <div class="container-full">
      <div class="container">
        <!-- if there are posts then do something -->
        <?php  if( have_posts() ) : ?>
          <!-- while loop - is going to execute code as long as something is true. -->
          <?php  while ( have_posts()) : the_post();
            //add in template tags to display content
            get_template_part('template-parts/content', 'page');
          ?>
          <?php endwhile; ?>
          <!-- closes the while loop -->
          <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
      </div> <!-- //container -->
    </div>



<?php get_footer();?>
