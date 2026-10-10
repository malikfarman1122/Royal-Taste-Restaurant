<?php
if (!defined('ABSPATH')) exit;

function royal_taste_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'royal_taste_setup');

function royal_taste_assets() {
    $theme_uri = get_template_directory_uri();
    wp_enqueue_style(
        'royal-taste-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'royal-taste-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400;1,600&family=JetBrains+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_script('royal-taste-react', 'https://unpkg.com/react@18/umd/react.production.min.js', array(), '18', true);
    wp_enqueue_script('royal-taste-react-dom', 'https://unpkg.com/react-dom@18/umd/react-dom.production.min.js', array('royal-taste-react'), '18', true);
    wp_enqueue_script('royal-taste-tailwind', 'https://cdn.tailwindcss.com', array(), null, true);
    wp_enqueue_script('royal-taste-babel', 'https://unpkg.com/@babel/standalone/babel.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'royal_taste_assets');

function royal_taste_body_classes($classes) {
    $classes[] = 'royal-taste-theme';
    return $classes;
}
add_filter('body_class', 'royal_taste_body_classes');
