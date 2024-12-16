<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="google-site-verification" content="EecTcvdM0xO2hTF18KPt-aHk1WlgoacxMqV7DU-UW0Y" />
    <meta name="theme-color" content="#fff">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/iww0yss.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <?php get_template_part('templates-parts/header/header', 'top'); ?>
            <div class="js-header" itemscope itemtype="http://schema.org/WPHeader">
                <div class="navbar js-navbar">
                    <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                    <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                    <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                </div>

            </div>
            <!-- <?php if (!is_singular('post') && !is_front_page()) : ?>
                <?php get_template_part('templates-parts/header/header', 'title'); ?>
            <?php endif; ?> -->
            <svg id="header-ornament" width="370" height="372" viewBox="0 0 370 372" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.29015 128.476C7.65648 124.213 9.16477 120.03 10.7884 115.936L103.433 135.661L63.3566 42.932C71.3238 36.1911 79.8235 30.143 88.749 24.8409L146.392 85.3932L150.181 1.7052C153.836 1.03022 157.509 0.452944 161.209 0L186.841 80.3487L240.908 7.51354C244.12 8.54376 247.296 9.65392 250.419 10.844L242.301 93.7149L327.457 65.9344C329.613 68.5366 331.689 71.1832 333.694 73.892L284.835 134.515L367.205 149.747C368.491 156.31 369.423 162.962 370 169.676L284.613 207.057L354.331 261.81C350.978 269.342 347.154 276.562 342.922 283.445L259.744 274.777L268.989 351.689C264.899 353.785 260.72 355.73 256.479 357.524L202.145 304.449L174.1 371.991C167.419 371.636 160.703 370.908 153.978 369.806L139.729 299.645L76.4875 338.136C71.9538 334.939 67.5975 331.555 63.4098 328.002L96.4412 262.574L8.05573 247.556C4.50683 237.502 1.80079 227.129 -0.00915527 216.543L78.9629 192.679L6.29015 128.476Z"
                    fill="#CBE0FF" />
            </svg>
        </div>

    </header>


    <main id="main">
        <div class="container">
            <div class="row">