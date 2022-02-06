<?php
/**
 * The main template for displaying ALL of your blog posts (excerpts).
 * @package 1212 wp demos A02
 * @since 1.0.0 
 */

    //display header
    get_header(); 
 ?>
    <!-- Normally you shouldn't hardcode content into your templates as it makes it challenging for users to update the headings, content, etc. However, because we can't edit the Blog page in the dashboard this is an exception. Later on we will talk about better methods, more user-friendly methods. 
    -->
    <!-- _e(''); function escapes text written in templates and displays to the browser. see: https://developer.wordpress.org/reference/functions/_e/ for info. -->

    <h1 class="banner">
        <?php _e('Blog'); ?>
    </h1>
    <p><?php _e(''); ?></p>

    <div class="container-full">
        <div class="container">
            <!-- if there are posts then do something -->
            <?php  if( have_posts() ) : ?>
                <!-- while loop - is going to execute code as long as something is true. -->
                <div class="blog-row">
                    <?php  while ( have_posts()) : the_post(); ?>
                        <!-- //add template tags to display the content -->
                        <div class="blog-card">
                            <!--image -->
                            <!-- image size options are thumbnail, medium, large -->
                            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
                            <div class="blog-card-body">
                                <div>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title('<h4>', '</h4>'); ?>
                                    </a>
                                    <p><?php echo get_the_date(); ?></p>
                                    <p><?php the_excerpt( ); ?></p>
                                </div>
                                <div class="blog-card-footer">
                                    <!-- get_the_category_list() comes prepopulated in a list <ul><li> -->
                                    <?php //echo get_the_category_list(); ?>
                                    <?php the_category(); ?>
                                    <p><?php _e('By: '); ?><?php the_author(); ?></p>
                                </div>
                            </div> <!-- //blog-card-body -->
                        </div><!-- end of card -->
                    <?php endwhile; ?><!-- closes the while loop -->
                </div>
                <?php else: ?>
                    <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer();?>
