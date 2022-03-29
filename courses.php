<?php
/**
 * Template Name: Courses
 * description: Custom template page for courses - shows all courses
 * @package 1212 wp demos A02
 * @since 1.0.0 
 * 
 */

//display header
get_header(); ?>

   <!-- content in this loop will come from the editor in the dashboard -->
    <div class="container-full">
      <div class="container">
        <!-- if there are posts then do something -->
        <?php  if( have_posts() ) : ?>
          <!-- while loop - is going to execute code as long as something is true. -->
          <?php  while ( have_posts()) : the_post(); ?>
            <!-- //add in template tags to display content -->

            <?php the_content(); ?>

          <?php endwhile; ?>
          <!-- closes the while loop -->
          <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
      </div> <!-- //container -->
    </div>
    <div class="container">  
      <!-- display custom content -->
      <!-- argument for displaying your custom loop -->
      <?php
          $args = array(
              'post_type'     => 'courses',
              'posts_per_page'    => 100, //display # of posts
          );
          $course_query = new WP_Query ($args);
      ?>

      <!-- loop for displaying custom content -->
      <?php if ( $course_query->have_posts() ) :?>
        <div class="card-flex-row">
          <?php while ( $course_query->have_posts() ) : $course_query->the_post(); ?>
          <!-- create card layout -->
              <div class="card">
                <header>
                  <!-- featured image/thumbnail -->
                  <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
                  </a>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title('<h3>','</h3>'); ?>
                  </a>
                </header>
                <div class="card-body">
                  <p><?php the_excerpt(); ?></p>
                </div>
                <footer>
                  <div class="left">
                    <!-- display dates,author, etc.... -->
                  <p><?php the_author();?></p>
                  </div>
                  <div class="right">
                    <!-- categories -->
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
                  </div>
                </footer>
              </div>
          <?php endwhile; ?>
        </div>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
              <p><?php _e('Sorry, no post matched your criteria');?></p>
      <?php endif; ?>
    </div>
  </div> <!-- //container-full -->



<?php get_footer();?>
