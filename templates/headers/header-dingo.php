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
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <style>*{font: 700 1.2rem 'Amatic SC', cursive;}</style>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">

        <!-- The WordPress Menu goes here -->
        <div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="color:#fff;">
                    <div class="modal-header" style="border:0;">
                        <button type="button" class="close btn btn-link" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close fa-lg" style="color:#999;"></i></button> 
                        <h4 class="modal-title text-center"><span class="sr-only">main navigation</span></h4>
                    </div>
                    <div class="modal-body text-center">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container_class' => '',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu',
                                'walker' => new wp_bootstrap_navwalker()
                                )
                                ); ?>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.fullscreen -->
                    

        <div class="wrapper-fluid wrapper-navbar">
            <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'cyberbility-starter' ); ?></a>
            <nav class="navbar navbar-light navbar-full bg-faded container" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->                                
                        <button class="btn btn-link navbar-toggler collapsed pull-right" data-toggle="modal" data-target="#menuModal">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>                                                              
                        <!-- Your site title as branding in the menu -->

                        <?php if ( !get_header_image() ) { ?>
                        <h1>
                            <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php } else { ?>                       
                        <?php if ( get_header_image() ) : ?>
                            <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                            </a>
                        <?php endif; // End header image check. ?>
                        <?php } ?>
                    </div>
                </div> <!-- .container -->
            </nav><!-- .site-navigation -->                            

        </div><!-- .wrapper-navbar end -->