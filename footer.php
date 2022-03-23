<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SecondPress
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container-fluid bg-dark text-light pt-4 pb-3">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <div class="col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <div class="col-md-4"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-black text-light">
            <div class="row p-3">
                <div class="col text-center">
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'https://secondsite.xyz/', 'secondpress' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Design by %s', 'secondpress' ), 'SecondSite' );
                            ?>
                        </a>
                        <span class="sep"> | © 2022 EG Kerk </span>

                    </div><!-- .site-info -->
                </div>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>