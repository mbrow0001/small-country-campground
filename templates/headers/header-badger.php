<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package cyberbility-starter
    */
    ?><!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            <?php wp_head(); ?>
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
            <style>
                *{font: 700 1.2rem 'Amatic SC', cursive;}
                .header-logo {
                    display: inline-block;
                    padding: 40px;
                    text-align: center;
                    width: 100%;
                }
                nav {
                  width: 1199px; 
                }
                nav .mobile {
                    text-align: center; 
                }
                nav .mobile #main-menu {
                  display: inline-block !important;
                  text-align: center;
                  margin: 0 auto; 
                }
                nav .mobile #main-menu .nav-item {
                    margin-left: 3rem; 
                }
                nav .mobile #main-menu a {
                    font-weight: 900;
                    text-transform: uppercase;
                    color: #000; 
                }
            </style>
        </head>
        <body <?php body_class(); ?>>
            <div id="page" class="hfeed site">



            <!-- Your site title as branding in the menu -->
            <?php if ( !get_header_image() ) { ?>
                <h1 class="text-xs-center">
                    <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
            <?php } else { ?>                       
                <?php if ( get_header_image() ) : ?>
                <a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                </a>
                <?php endif; // End header image check. ?>
            <?php } ?>

                <div class="wrapper-fluid wrapper-navbar">
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'cyberbility-starter' ); ?></a>
                    <nav class="navbar navbar-light navbar-full bg-faded container" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                        <div class="container">
                            <div class="navbar-header">
                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                                <button class="navbar-toggle hidden-lg-up" type="button" data-toggle="collapse" data-target=".mobile">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'container_class' => 'collapse navbar-toggleable-md mobile',
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => '',
                                    'menu_id' => 'main-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                    )
                                    ); ?>
                        </div> <!-- .container -->
                    </nav><!-- .site-navigation -->                            

                </div><!-- .wrapper-navbar end -->