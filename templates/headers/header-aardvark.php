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
            <script src="https://use.typekit.net/clr6lrz.js"></script>
            <script>try{Typekit.load({ async: true });}catch(e){}</script>
        </head>
        <body <?php body_class(); ?>>
            <div id="page" class="hfeed site">

                <div class="wrapper-fluid wrapper-navbar">
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'cyberbility-starter' ); ?></a>
                    <nav class="navbar navbar-light navbar-full bg-faded container" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                        <div class="container-fluid">
                            <div class="navbar-header">
                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                                <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".mobile">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Your site title as branding in the menu -->
                                <?php if (!has_custom_logo()) { ?>
                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                                <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
                            </div>
                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'container_class' => 'collapse navbar-toggleable-xs mobile pull-right',
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => '',
                                    'menu_id' => 'main-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                    )
                                    ); ?>
                        </div> <!-- .container -->
                    </nav><!-- .site-navigation -->                            

                </div><!-- .wrapper-navbar end -->