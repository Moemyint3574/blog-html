<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css/destyle.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('test test2'); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="inner">
            <?php if (is_front_page() || is_home()) : ?>
                <h1>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/mm.svg')); ?>" alt="LOGO" width="100"></a>
                </h1>

            <?php else: ?>
                <div>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/mm.svg')); ?>" alt="LOGO" width="100"></a>
                </div>

            <?php endif; ?>
            <button class="hamburger">
                <!-- <img src="./img/Menu.png" width="40px" alt=""> -->
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>

            </button>
            <nav class="gnav-pc">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#category">CATEGORY</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
                </ul>
            </nav>
            <nav class="gnav-sp">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#category">CATEGORY</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
                </ul>
            </nav>
        </div>
    </header>