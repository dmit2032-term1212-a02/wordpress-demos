<?php
/**
 * Template part/partial for displaying content for your homepage.
 * 
 * @package 1212 wp demos A02
 * @since 1.0.0
 */
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <header class="page-heading">
        <!-- get page title -->
        <!-- by default title displays as a h1 tag -->
        <?php the_title('<h2 class="">','</h2>'); ?>
    </header>

    <div class="content">
        <!-- display the page or post content -->
        <?php the_content(); ?>
       
    </div>

</article>
