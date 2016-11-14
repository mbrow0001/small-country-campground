<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cyberbility-starter
 */
?>

<?php dynamic_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cyberbility-starter' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cyberbility-starter' ), 'WordPress' ); ?></a>
                        <span class="sep"> | </span>
                        <?php printf( __( 'Theme: %1$s by %2$s.', 'cyberbility-starter' ), 'cyberbility-starter', '<a href="http://cyberbility-starter.com/" rel="designer">cyberbility-starter.com</a>' ); ?> 
                        (<?php printf( __( 'Version', 'cyberbility-starter' ) ); ?>: 0.0.1)
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
