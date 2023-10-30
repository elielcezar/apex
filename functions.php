<?php

function register_new_sidebars()
{
  register_sidebar(array(
    'id' => 'sidebar',
    'name' => __('Sidebar', 'litercultura'),
    'description' => __('Sidebar', 'litercultura'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
}
add_action('widgets_init', 'register_new_sidebars');
add_image_size('destaque-noticia', 540, 345, true);
add_image_size('thumb-noticia', 400, 400, true);


function register_my_menus()
{
  register_nav_menus(
    array(
      'main-menu' => __('Main Menu'),
      'secundario' => __('Menu Secundario')
    )
  );
}
add_action('init', 'register_my_menus');

add_theme_support('post-thumbnails');

/*function slick_register_styles()
{
  wp_enqueue_style('style-name', get_template_directory_uri() . '/slick/slick.css');
  wp_enqueue_style('style-name', get_template_directory_uri() . '/slick/slick-theme.css');
}
*/
/*
function add_my_script()
{
  wp_enqueue_script('script-name', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'));
  wp_enqueue_script('your-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
}*/
/*
add_action('wp_enqueue_scripts', 'slick_register_styles');
add_action('wp_enqueue_scripts', 'add_my_script');*/