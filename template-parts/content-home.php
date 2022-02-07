<?php
/**
 * Template part/partial for displaying content for your homepage.
 * 
 * @package 1212 wp demos A02
 * @since 1.0.0
 */
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="content">
        <!-- display the page or post content -->
        <?php the_content(); ?>
    </div>

</article>
