<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="site-header">
            <!-- First Part: Site Title -->
            <div class="site-branding">
                <h1><a href="<?php echo esc_url(home_url('/')); ?>">UppiTravels</a></h1>
            </div>

            <!-- Second Part: Navigation Menu -->
            <nav class="primary-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu',
                    'container' => false
                ));
                ?>
            </nav>

            <!-- Third Part: Call Now Button -->
            <div class="header-call-button">
                <a href="tel:+1234567890" class="call-now-button">Call Now</a>
            </div>
        </div>
    </header>
