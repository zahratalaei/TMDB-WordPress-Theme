<?php
//load css
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri().'./css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri().'./css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//load js
function load_js()
{
    wp_enqueue_script('jquery');
     
    wp_register_script('bootstrap', get_template_directory_uri().'./js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-background');

add_theme_support('editor-font-sizes');






//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu'=>'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);


//custom image sizes
add_image_size('blog-large', 800, 300, true);
add_image_size('blog-small', 250, 400, true);
add_image_size('poster', 1000, 500, true);

add_image_size('post-thumbnail-size', 800, 240, true);
add_image_size('poster', 100, 180, true);
add_image_size('fullpage-thumb-size', 590, 790, true);

//register sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name'=>'Page Sidebar',
            'id'=>'page-sidebar',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );

    register_sidebar(
        array(
                'name'=>'Blog Sidebar',
                'id'=>'blog-sidebar',
                'before_title'=>'<h4 class="widget-title">',
                'after_title'=>'</h4>'
            )
    );
}
add_action('widgets_init', 'my_sidebars');




function movies_post_type()
{
    $args = array(
        'labels'=>array(
            'name'=>'Movies',
            'singular_name'=>'Movie',
            'post_per_page'=>10
            
        ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        //'rewrite'=>array('slug'=>'my-car'),
        'menu_icon' => 'dashicons-admin-media',
        
        
    );
    register_post_type('movies', $args);
}
add_action('init', 'movies_post_type');



add_action('pre_get_posts', 'add_my_post_types_to_query');
 
// display custom post in front page

add_action('pre_get_posts', 'add_my_post_types_to_query');
function add_my_post_types_to_query($query)
{
    if (is_home() && $query->is_main_query()) {
        $query->set('post_type', array( 'post', 'movies' ));
    }
    return $query;
}