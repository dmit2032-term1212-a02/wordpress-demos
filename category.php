<?php
/**
 * Template for displaying all category types (generalized template) 
 * 
 * @package WP 1212 wp demos A02
 * @since 1.0.0
 * 
 */

 //display header
get_header(); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >

    <?php if( have_posts() ) : ?>
        <!-- only displayed once -->
        <!-- display banner -->
        <section class="banner">
            <h1>
                <?php _e('Category: ');?>
                <!-- if single_cat_title is set to true it will display the category -->
                <?php single_cat_title('', true); ?>
            </h1>
            <!-- displaying a category description (typically an optional feature) -->
            <?php if( category_description() ) : ?>
                <div><?php echo category_description(); ?></div>
            <?php endif?>
            
        </section>
        <div class="container">
        <?php while( have_posts() ) : the_post(); ?>
        <!-- cycles through all content and displays all until nothing else is left to be displayed -->
                <div class="category-post">
                    <?php echo get_the_post_thumbnail(); ?>
                    <h4>
                        <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title_attribute();?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <?php echo get_the_date(); ?>
                    <?php the_category(); ?>
                </div>
        <?php endwhile; ?>
        </div>
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif;?>


</article>






<?php get_footer(); ?>
