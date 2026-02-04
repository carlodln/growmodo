<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus([
    'main_menu' => 'Main Menu'
]);


add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('theme-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('theme-main',get_template_directory_uri() . '/assets/js/main.js', [], null, true);

    if (is_front_page()) {
        wp_enqueue_style(
            'swiper',
            'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
        );

        wp_enqueue_script(
            'swiper',
            'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
            [],
            null,
            true
        );
    }
});

add_action('wp_head', function () {
    $font = get_template_directory_uri() . '/assets/fonts/Urbanist.woff2';
    ?>
    <link
        rel="preload"
        href="<?= esc_url($font); ?>"
        as="font"
        type="font/woff2"
        crossorigin
    >
    <?php
}, 1);

add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});