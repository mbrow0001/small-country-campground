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
            <link href="https://fonts.googleapis.com/css?family=Cutive|Raleway" rel="stylesheet">
        </head>
        <body <?php body_class(); ?>>
            <div id="page" class="hfeed site">

                <div class="wrapper-fluid wrapper-navbar">
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'cyberbility-starter' ); ?></a>

                    <nav class="navbar navbar-light navbar-full bg-faded container-fluid" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <div class="navbar-header">
                            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                            <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".mobile">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Your site title as branding in the menu -->
                            <!-- end custom logo -->
                        </div>
                        
                        <!-- The WordPress Menu goes here -->
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container_class' => 'collapse navbar-toggleable-xs mobile',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu',
                                'walker' => new wp_bootstrap_navwalker()
                                )
                        ); ?>
                    </nav><!-- .site-navigation -->       
                    
                    <div class="container-fluid">
                    <div class="header-logo text-xs-center">
                        <img src="http://cycat4.com/wp-content/uploads/2016/12/logo.png" alt="">
                    </div>

                    <div class="row text-xs-center head__contact">
                        <div class="col-md-4">
                            <p>
                                Ready to Book? <br>
                                Check Availability
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Talk to Our Team <br>
                                540 967 2431
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Email A Question <br>
                                camp@smallcountry.com
                            </p>
                        </div>
                    </div>

                    <div class="row head__address text-xs-center">
                        Small Country Campground | 4400 Byrd Mill Road | Louisa VA 23093
                    </div>

                    <div class="row text-xs-center head__icons">
                        <div class="col-md-2">
                            <div class="head__icon">
                                Facebook
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="head__icon">
                                Twitter
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="head__icon">
                                Yelp
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="head__icon">
                                Trip Advisor
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="head__icon">
                                Instagram
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="head__icon">
                                Dribble
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .wrapper-navbar end -->