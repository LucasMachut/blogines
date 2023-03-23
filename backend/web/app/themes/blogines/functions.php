<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');

// Ajouter la prise en charge des menus de navigation
function blogines_register_menu()
{
    register_nav_menus([
        "menu_light" => "Menu Light"
    ]);
}
add_action('init', 'blogines_register_menu');


function blogines_enqueue_scripts()
{
    wp_enqueue_style('blogines', get_template_directory_uri() .'/assets/css/index.css');
    //on charge du CSS et JS
}

add_action('wp_enqueue_scripts', 'blogines_enqueue_scripts');



