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
        <header></header>

