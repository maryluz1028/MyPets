<?php
function add_theme_supports(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
function register_menus(){
    register_nav_menus(
        array(
            'menu_primary'=>('menu_primario'),
            'menu_redes'=>('menu_redes')
        )
        );
    
}
function  register_widgets(){
    register_sidebars(1);
}
add_action('after_setup_theme','add_theme_supports');
add_action('init','register_menus');
add_action('widgets_init','register_widgets');

function modify_excerpt_more(){
    return '<a class="excerpt_link" href="'.get_permalink($post->ID).'"> Ver mas... </a>';
}
function modify_excerpt_length(){
    return 20;
}
add_filter('excerpt_more','modify_excerpt_more');
add_filter('excerpt_length','modify_excerpt_length');
