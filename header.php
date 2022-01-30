<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
 
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/noframework.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/sticky.min.js"></script>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />-->
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/tilt.jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/wow.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/pageSwitch.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/custom.js"></script>
    <?php wp_head(); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/inc/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/inc/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/inc/assets/favicons/favicon-16x16.png">
    <!--<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/inc/assets/favicons/site.webmanifest">-->
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/inc/assets/favicons/safari-pinned-tab.svg" color="#20a4e8">
    <meta name="msapplication-TileColor" content="#20a4e8">
    <meta name="theme-color" content="##20a4e800000">

</head>

<body <?php body_class(); ?>>

<?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
 
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <a href="/" title="home" class="navbar-toggler alt-hidden">
                    <span class="navbar-toggler-icon"></span>
                </a >

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>
        </div>
	</header> 
    <div class="bg-wrap">
    <div class="sky" id="bg-static">
    <div class="inner">
    <div class="blur">
    <i class="fas fa-cloud 1"></i>
    <i class="fas fa-cloud 2"></i>
    <i class="fas fa-cloud 3"></i>
    <i class="fas fa-cloud 4"></i>
    <i class="fas fa-cloud 5"></i>
    <i class="fas fa-cloud-showers-heavy 6"></i>
    <i class="fas fa-cloud-moon 7"></i></div>
    </div>
    </div>
    </div> 
