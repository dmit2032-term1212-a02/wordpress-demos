<?php
/***
 * Template for displaying search results
 * 
 * 
 */
    get_header();
?>

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="container">
        <?php if( have_posts() ) : ?>
            <!-- items that get siplayed only once go here -->
            <h1 class="banner">
                <?php printf(
                    //translators: %s - displays query term in text
                    esc_html__('Searched for: %s', 'theme domain/name'), 
                    '<span>' . get_search_query() .'</span>'
                ); ?>
            </h1>
            <?php while( have_posts() ) : the_post(); ?>
            <!-- items that get displayed multiple times go here -->
                <?php get_template_part('template-parts/content', 'search'); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
    </article>
<?php get_footer(); ?>

