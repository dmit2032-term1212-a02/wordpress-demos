<?php
/**
 * The main template for displaying individual blog posts.
 * @package 1212 wp demos A02
 * @since 1.0.0 
 */

    //display header
    get_header(); 
?>
    <h1 class="banner">
      <?php _e('Blog'); ?>
    </h1>
    <div class="full-container">
      <div class="container two-thirds-layout">
        <!-- if there are posts then do something -->
        <?php  if( have_posts() ) : ?>
          <!-- while loop - is going to execute code as long as something is true. -->
          <?php  while ( have_posts()) : the_post();
            //add in template tags to display content
            get_template_part('template-parts/content', 'single');
          ?>
          <?php endwhile; ?>
          <!-- closes the while loop -->
          <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
        <!-- sidebar here -->
          <div class="right-sidebar one-thrid-col">
            <?php dynamic_sidebar('right-sidebar'); ?>
          </div>
      </div>
    </div>



<?php get_footer();?>
