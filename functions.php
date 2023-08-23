<?php


// Add Stylesheet Link

function for_style_sheet()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	 wp_enqueue_style('slick-slider', get_template_directory_uri() . '/assets/css/slick-slider.min.css');
    // wp_enqueue_style('flat_icons', get_template_directory_uri() . '/assets/css/flat-icons.php');

    wp_enqueue_style('style', get_stylesheet_uri());

    // wp_enqueue_script('theme_library', get_template_directory_uri() . '/assets/js/theme-lib.js');
    // wp_enqueue_script('swipper_slider', get_template_directory_uri() . '/assets/js/swipper.js');
    // wp_enqueue_script('theme_functions', get_template_directory_uri() . '/assets/js/theme-fun.js');
}



add_action('wp_enqueue_scripts', 'for_style_sheet');

// for remove p tag
remove_filter('the_content', 'wpautop');


// custom logo

add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
    $defaults = array(
        // 'height'      => 200,
        // 'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

// logo end


function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');




// Register Widgets
register_sidebar(array(
    'name' => 'Footer Widget',
    'id'   => 'footer',
    'description'   => 'This is the widgetized sidebar.',
    'before_widget' => '<div class="box sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="title">',
    'after_title' => '</h5><div class="inner-content ">',
));

// Register Menus

register_nav_menus(array(


    'primary' => __('Primary Menu'),

    'footer' => __('Footer Menu'),

    'it-support-menu' => __('IT Support Menu'),

    'it-services-menu' => __('IT Service Menu'),

    'business-solutions-menu' => __('Business Solution Menu'),

    'it-outsourcing-menu' => __('It Outsourcing Menu'),

    'about-us-menu' => __('About Us Menu'),

    'website-design-menu' => __('Website Design Menu')

    // 'search-1' => __('Search 1'),

    // 'search-2' => __('Search 2'),

));


// For Main Slider

register_post_type(
    'main-slider',

    array(

        'labels' => array(

            'name'                  => __('Main Slider'),

            'singular_name'         => __('Main Slider'),

            'add_new'               => __('Add new Slider'),

            'add_new_item'          => __('Add new Slider'),

            'new_item'              => __('New Slider'),

            'view_item'             => __('View Slider'),

            'search_items'          => __('Search Slider Items'),

            'not_found_in_trash'    => __('No Slider Items Found in Trash'),

            'menu_icon'             => 'dashicons-slides',

            'has_archive'           => true,


        ),

        'public' => true,

        'supports' => array('title', 'editor', 'thumbnail'),

    )

);



// For Our Services

register_post_type(
    'our-service',
    array(
        'labels' => array(

            'name'                  => __('Our Services'),

            'singular_name'         => __('Our Service'),

            'add_new'               => __('Add new Service'),

            'add_new_item'          => __('Add new Service'),

            'new_item'              => __('New Service'),

            'view_item'             => __('View Service'),

            'search_items'          => __('Search Service Items'),

            'not_found_in_trash'    => __('No Service Items Found in Trash'),

            'menu_icon'             => 'dashicons-slides',

            'has_archive'           => true,


        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),

    )
);


// For Our Guards

register_post_type(
    'our-guard',

    array(

        'labels' => array(

            'name'                  => __('Our Guards'),

            'singular_name'         => __('Our Guard'),

            'add_new'               => __('Add new Guard'),

            'add_new_item'          => __('Add new Guard'),

            'new_item'              => __('New Guard'),

            'view_item'             => __('View Guard'),

            'search_items'          => __('Search Guard Items'),

            'not_found_in_trash'    => __('No Guard Items Found in Trash'),

            'menu_icon'             => 'dashicons-slides',

            'has_archive'           => true,


        ),

        'public' => true,

        'supports' => array('title', 'editor', 'thumbnail'),

    )

);


// For Our Clients

register_post_type(
    'our-client',

    array(

        'labels' => array(

            'name'                  => __('Our Clients'),

            'singular_name'         => __('Our Client'),

            'add_new'               => __('Add new Client'),

            'add_new_item'          => __('Add new Client'),

            'new_item'              => __('New Client'),

            'view_item'             => __('View Client'),

            'search_items'          => __('Search Client Items'),

            'not_found_in_trash'    => __('No Client Items Found in Trash'),

            'menu_icon'             => 'dashicons-slides',

            'has_archive'           => true,


        ),

        'public' => true,

        'supports' => array('title', 'editor', 'thumbnail'),

    )

);




// Remove Guttenburg Builder

// add_filter('use_block_editor_for_post', '__return_false');

// Add post Thumbnail Image

add_theme_support('post-thumbnails');

// ACF Theme Option Support
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
