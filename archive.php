<?php
/**
 * 
 * This is the archive template
 * This is the template that displays a collection of posts, categories, tags, or tag clouds, etc... It's a essentially a giant libraray of your site. 
 * 
 * @package 1212 wp demos A02
 * @since 1.0
 */
    //display header
    get_header()
?>

    <article <?php post_class();?> id="post-<?php the_ID();?>">

    <h1 class="banner">
        <?php _e('Archives'); ?>
    </h1>
    <div class="container">
        <section>
            <div class="row">
                <div class="col col-1">
                    <!-- recent posts -->
                    <h2><?php _e('Recent Blogs');?></h2>
                    <ul class="blogs">
                        <!-- displays the 6 most recents posts 
                        to display all posts: type=postbypost
                         -->
                        <?php wp_get_archives('type=postbypost&limit=6'); ?>
                    </ul>

                </div>
                <div class="col col-2">
                    <!-- recent posts -->
                    <h2><?php _e('Pages');?></h2>
                    <!-- displays a list of pages -->
                    <ul class="page-list">
                        <?php wp_list_pages('title_li='); ?>
                    </ul>
                </div>
                <div class="col col-3">
                    <!-- categories / tags -->
                    <h2><?php _e('Categories');?></h2>
                    
                    <!-- display a list of categories -->
                    <ul class="cat-list">
                         <!-- 
                        to remove or hide the the default list heading add: 'title_li' to be set to null or empty. This can be done in a couple of different ways:
                            1. if you only have the one parameter then you don't need to add an array for a list of arguements:
                                <?php //wp_list_categories( 'title_li=' ); ?>
                            2. If you have a list of parameters than create an array with a list of parameters to be passed. See below.
                        -->
                        <?php wp_list_categories( 
                            array(
                               'depth' => 1, 
                               'title_li' => '', 
                            ),
                            
                        ); ?>
                    </ul>
                </div>
                <div class="col col-4 remove-default-widget-heading">
                    <!-- monthly archives -->
                    <h2><?php _e('Monthly Archives');?></h2>
                    <!-- displays your monthly archives as list -->
                    <?php the_widget('WP_Widget_Archives',
                        array(
                            'orderby'       => 'count',
                            'order'         => 'DESC',
                            'show_count'    => 1,
                        )
                    );?>

                    <!-- display monthly archives as dropdown -->
                    <?php the_widget('WP_Widget_Archives', 'dropdown=1'); ?>
                </div>
            </div>
        </section>
    </div>
    </article>






<?php get_footer(); ?>
