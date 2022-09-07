<?php
    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/style.min.css', array(), time() );
    });

    add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

    function unicode_create_post_type() {
        register_post_type('unicode',
            array(
                'labels' => array(
                    'name' => __('Unicode'),
                    'singular_name' => __('Unicode')
                ),
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-admin-site-alt3'
            )
        );
    }
    add_action('init', 'unicode_create_post_type' );