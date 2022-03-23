<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SecondPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri().'/'; ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri().'/'; ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri().'/'; ?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri().'/'; ?>site.webmanifest">
	<?php wp_head(); ?>
    <style type="text/css">
        .home .col-wrapper {
            min-height:550px;
            width:100%;
            background: url('<?php header_image(); ?>') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'secondpress' ); ?></a>

	<header id="masthead" class="site-header">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
            <div class="container mx-auto">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-navbar-collapse-1" aria-controls="bs-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'secondpress' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse mt-2',
                    'container_id'      => 'bs-navbar-collapse-1',
                    'menu_class'        => 'navbar-nav mx-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav><!-- #site-navigation -->
	</header><!-- #masthead -->
