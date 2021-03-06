<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
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
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar  site-navigation container" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            

                <div class="col-md-12">

                            <div class="navbar-header">
                                <div class="col-sm-6">

                                    <!-- Your site title as branding in the menu -->
                                    <a class="navbar-brand"
                                        href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                        rel="home">
                                        <img alt="<?php bloginfo( 'name' ); ?>"
                                            src="<?php bloginfo('template_directory'); ?>/img/logo.png" />
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6">

                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'top',
                                        'container_class' => 'collapse navbar-toggleable-md exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav pull-xs-right',
                                        'fallback_cb' => '',
                                        'menu_id' => 'top-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>

                </div> <!-- .container -->
</div>
                
            
        </nav><!-- .site-navigation -->
        
    </div><!-- .wrapper-navbar end -->






