<?php

// Enable theme support for post thumbnails
add_theme_support('post-thumbnails');

// Add the DNA Blog post type
add_action('init', 'create_blog_post_type');

function create_blog_post_type() {
    register_post_type('DNA Blog', array(
        'labels' => array(
            'name' => 'DNA Blog',
            'singular_name' => 'DNA Blog'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions', 'comments', 'customer-fields'),
        'heirarchical' => true,
        'taxonomies' => array('category')
            )
    );
}
