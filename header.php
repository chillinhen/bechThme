<!doctype html>
<?php #require 'img/icons.svg'; ?>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php
            if (wp_title('', false)) {
                echo ' :';
            }
            ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

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
        <?php get_template_part('svg/inline','icons.svg');?>
        <!-- header -->
        <header id="header" class="row" role="banner">
            <div class="container">
                <!-- logo -->
                <hgroup class="col-md-6 logo">
                    <h1>
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                            <svg><use xlink:href="#logo"></use></svg>  <span><?php bloginfo('name'); ?></span>
                        </a>
                    </h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </hgroup>

                <!-- /logo -->

                <!-- nav -->
                <nav class="nav col-md-6" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
                <!-- /nav -->
            </div>
        </header>
        <!-- /header -->
        <main role="main">
