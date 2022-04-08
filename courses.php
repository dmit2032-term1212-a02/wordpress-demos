<?php
/**
 *  Template Name: Courses
 *  description: displays all courses
 * @package wp demos a01
 * @since 1.0
 * 
 */
    //display header
    get_header(); ?>
    <div class="container">
      <?php  if( have_posts() ) : ?>
        <?php  while ( have_posts()) : the_post(); ?>
            <section>
              <!-- AlL CPT displayed on the courses page -->
              <?php 
                  //creates pagination to help with paging through CPT -->
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  //argument to create custom loop and create an WP_Query variable to store CPT info
                  $args = array(
                      'post_type' =>  'courses',
                      'posts_per_page'    => 3, //display # of posts
                      'paged' => $paged
                  );
                  $courses_query  = new WP_Query($args);
              ?>

              <?php if ($courses_query->have_posts() ) : ?>
                  <div class="flex-card-row">
                    <?php while ($courses_query->have_posts() ) : $courses_query->the_post(); ?>
                      <div class="card">
                        <header>
                          <!-- featured images -->
                          <a href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></a>
                          <a href="<?php the_permalink(); ?>"> <?php the_title('<h3>', '</h3>'); ?></a>
                        </header>
                        <div class="card-body">
                          <p><?php the_excerpt(); ?></p>  
                        </div>
                        <footer>
                          <div class="left">
                            <p><?php the_author(); ?></p>
                          </div>
                          <div class="right">
                            <!-- categories -->
                            <ul>
                              <?php 
                                $term = get_the_category();
                                if ( $term ) {
                                  foreach ( $term as $t ) {
                                    $t = get_term($t);
                                    //print out the url with a class that use the categories as a css selector
                                    print_r( '<li><a class="'.esc_html($t->slug).'" href="' . get_term_link($t) .'" >' . $t->name . '</a></li>' );
                                    //slug - part of the url (page/taxonomoy name)
                                    //name - shows the name of the category
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
                    <p><?php _e('Sorry, no posts matched your criteria'); ?></p>
              <?php endif; ?> 
            </section>

        <?php endwhile; ?> <!-- //main loop - endwhile -->
        <ul class="pagination">
          <!-- 
            Note: the initial reason the pagination didn't work was because both the CPT and the Page template were using the same slug (url) name of courses. Which was causing the pagination to generate a 404 page 
            
            the easiest method to fix this is to update your slug on the page template to something other than courses, for example - using all-courses. The page name can stay the same. Just the url needs updated.
        -->
            <li><?php previous_posts_link('&larr; Prev', $courses_query->max_num_pages) ?></li>
            <li><?php next_posts_link('Next &rarr;', $courses_query->max_num_pages) ?></li>
          </ul>
        <?php else: ?>
          <?php get_template_part('template-parts/content', 'none'); ?>
      <?php endif; ?>
    </div>





<?php get_footer(); ?>
