<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SecondPress
 */

get_header();
?>
    <div class="container-fluid bg-light">
        <div class="row pt-3">
            <div class="col-2 home-left bg-light text-light m-0">
		        <?php dynamic_sidebar('home-left'); ?>
            </div>
            <div class="col-8 bg-light text-light home-center m-0">
                <main id="primary" class="site-main">
                    <div class="site-branding">
	                    <?php if ( get_header_image() ) : ?>
                        <div class="col-wrapper row m-0">

                        </div>
                        <div class="row m-0 pb-3">
                            <div class="col m-0 p-0">
                                <div class="row m-0 bg-dark" id="main-img-footer">
                                    <div class="col-1 pt-2">
				                        <?php
				                        // the_custom_logo();
				                        $custom_logo_id = get_theme_mod( 'custom_logo' );
				                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

				                        if ( has_custom_logo() ) {
					                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
				                        } else {
					                        echo '<h1>' . get_bloginfo('name') . '</h1>';
				                        }
				                        ?>
                                    </div>
                                    <div class="col-11 pt-2">
				                        <?php
				                        $secondpress_description = get_bloginfo( 'description', 'display' );
				                        if ( $secondpress_description || is_customize_preview() ) : ?>
                                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                                            <p class="site-description"><?php echo $secondpress_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
	                    <?php endif; ?>
                    </div><!-- .site-branding -->
                </main><!-- #main -->
            </div>
            <div class="col-2 home-right text-dark m-0">
	            <?php dynamic_sidebar('home-right'); ?>
            </div>
        </div>
    </div>
<div class="container m-0 p-0">
    <div class="row m-0 p-0">
        <div class="col m-0 p-0">
	        <?php
	        while ( have_posts() ) :
		        the_post();

		        get_template_part( 'template-parts/content', 'untitled' );

		        // If comments are open or we have at least one comment, load up the comment template.
		        if ( comments_open() || get_comments_number() ) :
			        comments_template();
		        endif;

	        endwhile; // End of the loop.
	        ?>
        </div>
    </div>
</div>


<?php
get_footer();