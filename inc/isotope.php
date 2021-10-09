<?php
    //* Enqueue Isotope's CSS and Javascript
add_action('wp_enqueue_scripts', 'isotope_enqueue');

function isotope_enqueue()
{
    wp_enqueue_script(
        'isotope-js',
        get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'isotope-init',
        get_stylesheet_directory_uri() . '/assets/js/isotope-init.js',
        array( 'jquery', 'isotope-js' ),
        '1.0.0',
        true
    );
    wp_enqueue_style(
        'isotope-css',
        get_stylesheet_directory_uri() . '/assets/css/isotope.css',
        '1.0.0',
        'all'
    );
}
