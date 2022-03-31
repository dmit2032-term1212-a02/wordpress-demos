<?php
/**
 * The main template for displaying individual blog posts.
 * @package 1212 wp demos A02
 * @since 1.0.0 
 */

    //display header
    get_header(); 
?>
    <div class="full-container">
      <div class="container two-thirds-layout">
        <!-- if there are posts then do something -->
        <?php  if( have_posts() ) : ?>
          <!-- while loop - is going to execute code as long as something is true. -->
          <div class="banner">
             
          <!-- adding in a image using ACF Fields -->
              <?php 
                  $css_icon = get_field('css_image');
                  if( !empty($css_icon) ): ?>
                  <!-- display our image -->
                  <img src="<?php echo esc_url($css_icon['url'] ); ?>" alt="<?php echo esc_attr( $css_icon['alt'] ); ?>" />
              <?php endif ?>
               <!-- page title -->
              <?php the_title('<h1>', '</h1>'); ?>
          </div>
          <?php  while ( have_posts()) : the_post(); ?>
          <?php the_author(); ?>
          <ul>
            <?php 
              $term = get_the_category();
              if ($term) {
                foreach ($term as $t ) {
                  $t = get_term($t);
                  //print url with classes that use the categories as CSS selectors
                  print_r( '<li><a class="' . esc_html($t->slug). '" href="' . get_term_link($t) . '">' . $t->name . '</a></li>');
  
                  //name - show the category name
                }
              }
            ?>
          </ul>

          <p><?php the_content(); ?></p>
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
