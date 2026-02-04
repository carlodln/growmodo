<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <?php
        $header_settings = get_field('header_settings');
        $show_banner = $header_settings['show_banner'] ?? false;

        if ($show_banner && $header_settings) :

            $banner_text        = $header_settings['banner_text'] ?? '';
            $banner_cta_text    = $header_settings['cta_text'] ?? '';
            $banner_cta_url     = $header_settings['cta_url'] ?? '';
            $banner_cta_new_tab = $header_settings['open_in_new_tab'] ?? false;

            $nav_cta_text       = $header_settings['navigation_button_text'] ?? '';
            $nav_cta_url        = $header_settings['navigation_button_text'] ?? '';
            $nav_cta_new_tab    = $header_settings['navigation_open_in_new_tab_'] ?? false;
            ?>
            
            <div class="header-banner">
                <div class="header-banner-overlay"></div>
                <div class="container">
                    <?php if ($banner_text) : ?>
                        <span class="banner-text"><?php echo $banner_text; ?></span>
                    <?php endif; ?>

                    <?php if ($banner_cta_text && $banner_cta_url) : ?>
                        <a 
                            href="<?php echo $banner_cta_url; ?>" 
                            <?= $banner_cta_new_tab ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                            class="banner-cta"
                        >
                            <?= $banner_cta_text; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <div class="site-nav">
        <div class="container">
            <?php
                $brand = get_field('branding');
            ?>
            <nav>
                <?php 
                if($brand):
                    $logo = $brand['logo'] ?? '';
                    if($logo):
                ?>
                    <a href="<?= home_url(); ?>" class="header-logo">
                        <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                    </a>
                <?php 
                    endif;
                endif; 
                ?>
                <?php wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'menu_class'     => 'desktop-menu'
                    ]); 
                ?>
                <?php if ($nav_cta_text && $nav_cta_url) : ?>
                    <a 
                        href="<?php echo $nav_cta_url; ?>" 
                        <?= $nav_cta_new_tab ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                        class="btn nav-btn"
                    >
                        <?= $nav_cta_text; ?>
                    </a>
                <?php endif; ?>
                <button type="button" class="mobile-menu-toggle-btn">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/menu.svg" alt="humberger menu"/>
                </button>
            </nav>
        </div>
    </div>
</header>