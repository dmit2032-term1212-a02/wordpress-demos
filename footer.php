<?php
/** 
 * The footer for the theme 
 * @package 1212 wp demos A02
 * @since 1.0.0
*/
?>

        <footer>
            <div class="container">
                <div class="col col-one">
                    <?php if (is_active_sidebar('footer-col-one') ) : ?>
                        <?php dynamic_sidebar( 'footer-col-one' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col col-two">
                    <?php if (is_active_sidebar('footer-col-two') ) : ?>
                        <?php dynamic_sidebar( 'footer-col-two' ); ?>
                    <?php endif; ?>
                </div>
                <!-- typical items that get hardcoded. -->
                <p>Copyright &copy; <?php echo date('Y'); ?> WPdemos | For educational purposes  </p>
             </div>
        </footer>
    <?php wp_footer() ?>
    </body>
</html>
