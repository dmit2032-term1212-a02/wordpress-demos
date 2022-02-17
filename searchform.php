<?php
/***
 * 
 * The template for displaying search forms, adding in additional functionality if need be. 
 * 
 * @package wp demos a02
 * @since 1.0.0
 * 
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label class="sr-only" for="s"><?php esc_html_e('Search'); ?></label>
    <input type="text" id="s" name="s" placeholder="<?php esc_attr_e('Search for something') ?>" value="<?php the_search_query(); ?>"/>
    <input type="submit" class="submit-btn" name="submit" value="<?php esc_attr_e('Search') ?>">
</form>
