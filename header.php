<?php
/**
 *  This header for our theme
*  This template will display all the <head> information and the header  content until your body content 
 * @package 1212 wp demos A02
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset') ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <header>
            <div class="container">
                <div class="logo">
                    <!-- option 2 -->
                    <?php if ( ! has_custom_logo() ) { ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                            <!-- //if your page is set to front-page or blog display the site title (appearance > customize) -->
                            <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                        <?php else : ?>
                        <!-- //if your page is not set to front-page or blog display the site title (appearance > customize) -->
                        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                        <?php endif; ?>
                            <!-- //otherwise display the custom logo. -->
                        <?php } else {
                            the_custom_logo();
                        }?>
                    </div>

                    <!-- not the best method: device based mobile logo styling: wp_is_mobile() -->
                    <div class="sm-screens mobile">
                        <a class="mobile-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-logo.svg" alt="<?php the_title(); ?>"/>
                            <span class="sr-only"><?php bloginfo( 'name' ); ?></span>
                        </a>
                    </div>
            </div>
            <!-- //container -->



        </header>

