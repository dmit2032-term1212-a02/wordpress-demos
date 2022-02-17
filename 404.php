<?php
/**
 * 404 Template
 * @package wp demos A02
 * @since 1.0.0
 * 
 */
//display header
    get_header();
?>

<article <?php post_class(); ?> id="post-<?php the_ID();?>">
<div class="container error">
    <section class="">
        <div class="error-heading">
            <h1>
                <?php esc_html_e('Sorry, page not found', 'theme name') ?>
            </h1>
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try the search below', 'theme name here');?></p>
        </div>
        <div class="">
            <!-- //display a search form -->
            <?php get_search_form(); ?>
        </div>
    </section>

</div>

</article>


<?php get_footer(); ?>
