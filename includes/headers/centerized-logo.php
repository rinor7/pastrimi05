<?php
/**
 * @package Base Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Change this to "noindex, nofollow" when you go live -->
    <meta name="robots" content="noindex, nofollow"> 
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
     <!-- Open Graph Description (for social media platforms like Facebook, LinkedIn, etc.) -->
     <?php 
    // Get values from options page
    $og_description = get_field('og_description', 'option'); 
    $og_image = get_field('og_image', 'option');
    if (!$og_description) {
        $og_description = get_theme_mod('base_theme_og_description', get_bloginfo('name')); // fallback to site title
    }
    if (!$og_image) {
        $og_image = ''; // fallback
    }
    ?>
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">
    <?php if (is_singular()) : ?>
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
    <?php endif; ?>
    <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>" />
    <?php if ($og_image): ?>
    <link rel="image_src" href="<?php echo esc_url($og_image); ?>" />
    <?php endif; ?>
    
    <!-- Profile link for XFN (XHTML Friends Network), used for linking to profiles -->
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Apple touch icon (for iOS devices) -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">

    <!-- Preloading font for performance improvement -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <!-- Optional: Helps the browser connect to fonts.googleapis.com earlier for performance improvement -->
        <!-- <link rel="dns-prefetch" href="//fonts.googleapis.com"> -->

    <!-- Optional: Preload Google Font stylesheets to make fonts load faster -->
        <!-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
        <!-- <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"></noscript> -->
     
    <!-- Adding a canonical URL tag to prevent duplicate content issues -->
     <link rel="canonical" href="<?php echo esc_url(home_url()); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php $filename = basename(__FILE__, '.php'); body_class( array( wp_is_mobile() ? 'wp-is-mobile' : 'wp-is-desktop', get_field('sticky', 'option') ? 'header-sticky' : '', $filename ) ); ?>>
    <div id="page" class="site">
        <!-- Header with Logo in Center -->
        <header id="header-site" class="site-header logo-center-header">
            <div class="headerbar center-logo-header" id="headerbar">
                <div class="container-fluid">
                    <div class="menu-here">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center">
                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-4',
                                'menu_id'        => 'left-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'd-none-mobile collapse navbarNavLeft navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                    <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-5',
                                'menu_id'        => 'right-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'd-none-mobile collapse navbarNavRight navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                            <?php if(wp_is_mobile()) { ?>
                                <div class="mobile-menu d-none-desktop">
                                    <?php wp_nav_menu(
                                        array(
                                        'theme_location'    => 'menu-6',
                                        'menu_id'        => 'center-menu',
                                        'menu_class'        => 'navbar-nav',
                                        'container_class'  => 'collapse navbar-collapse main-nav-toggle',
                                        'container_id'    => 'navbarNav',
                                        )
                                        ); 
                                    ?>
                                </div>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <span class="menu-global menu-middle"></span>
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <div class="right-widget d-none-mobile">
                                <?php if(is_active_sidebar('widget-6') ) { ?>
                                <ul>
                                    <?php dynamic_sidebar('widget-6');?>
                                </ul>
                                <?php } ?>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- <div class="site-custom"> -->
        <script>
        $(document).ready(function() {
            function updatePadding() {
                if ($(window).width() <= 976) {
                    var headerHeight = $('#headerbar').outerHeight();
                    $('.site-custom').css('padding-top', headerHeight + 'px');
                } else {
                    $('.site-custom').css('padding-top', '');
                }
            }
            updatePadding();
            $(window).resize(updatePadding);
        });
        </script>