<?php 
//add function to setup theme
function customtheme_theme_setup(){
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action('after_setup_theme', 'customtheme_theme_setup');
//add support for featured images
add_theme_support('post-thumbnails');
?>