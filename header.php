<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
     	<?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
		         function theme_slug_render_title() {
		     ?>
		     <title><?php wp_title( '|', true, 'right' ); ?></title>
		     <?php
		         }
		         add_action( 'wp_head', 'theme_slug_render_title' );
		     endif;?>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php get_template_part('inc/meta');?>

        <?php wp_head(); ?>
        <script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
    <?php get_template_part('svg/inline', 'icons.svg'); ?>
        <!-- header -->
        <header id="header" class="row" role="banner">
            <div class="container">
                <div class="home-btn mobile-layout">
                    <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
                        <svg><use xlink:href="#homeBtn"></use></svg>
                        <span class="fallback"></span>
                    </a>          
                </div>
                <!-- nav -->
                <nav class="nav" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
                <!-- /nav -->
                <div class="navbar-toggle">
                    <svg><use xlink:href="#menu"></use></svg>
                    <span class="fallback"></span>
                </div>
                <!-- logo -->

                    <h1 class="logo text-right">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                            <span class="name"><?php bloginfo('name'); ?></span>
                            <span class="description"><?php bloginfo('description'); ?></span>
                        </a>
                    </h1>

                <!-- /logo -->
            </div>
        </header>
        <!-- /header -->
        <main role="main">
