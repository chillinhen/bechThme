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
    <?php if (is_front_page()) : ?>
        <?php if (get_theme_mod('bechhold_BG')) : ?>
            <body <?php body_class(); ?> style="background-image: url(<?php echo esc_url(get_theme_mod('bechhold_BG')); ?>)">
            <?php endif; ?>
        <?php else : ?>
        <body <?php body_class(); ?>>
        <?php endif; ?>

        <?php get_template_part('svg/inline', 'icons.svg'); ?>
        <!-- header -->
        <header id="header" class="row" role="banner">
            <div class="container">
                <!-- nav -->
                <nav class="nav col-md-7" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
                <!-- /nav -->
                <!-- logo -->
                <hgroup class="col-md-5 text-right">
                    <h1 class="logo">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                            <svg><use xlink:href="#logo"></use></svg>
                            <span class="name"><?php bloginfo('name'); ?></span>
                            <span class="description"><?php bloginfo('description'); ?></span>
                        </a>
                    </h1>
                </hgroup>
                <!-- /logo -->
            </div>
        </header>
        <!-- /header -->
        <main role="main" class="row">
