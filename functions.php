<?php

add_action ('after_setup_theme', 'ourThemeSetup');

function ourThemeSetup(){

    add_theme_support('menus');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('post-formats',['audio','video','gallery']);
    
    register_nav_menus([
    
    'primaryMenu'       => 'Primary Menu',
    'footerMenu'        => 'Footer Menu',
    
    ]);
    
    register_post_type('honorary',[
    
        'public'                => true,
        'labels'                => [
    
            'name'              => 'Honorary',
            'all_items'         => 'All Honorary',
            'add_new'           => 'Add New Honorary',
            'add_item'          => 'Add New Honorary',
            'featured_image'    => 'Honorary Image',
            'set_featured_image'=> 'Set Honorary Image',
    
        ],
    
        'supports'              => ['title','editor','thumbnail'],
        'menu_icon'             => 'dashicons-awards',
    
    ]);

    register_post_type('service',[
    
        'public'                => true,
        'labels'                => [
    
            'name'              => 'Service',
            'all_items'         => 'All Services',
            'add_new'           => 'Add New Service',
            'add_item'          => 'Add New Service',
            'featured_image'    => 'Service Image',
            'set_featured_image'=> 'Set Service Image',
    
        ],
    
        'supports'              => ['title','editor'],
        'menu_icon'             => 'dashicons-megaphone ',
    
    ]);

};

add_action ('widgets_init','setSidebar');

function setSidebar(){

    register_sidebar([
    
        'name'                  => 'Right Sidebar',
        'id'                    => 'rightSidebar',
        'description'           => 'This is Right Sidebar',
            
    ]);

};

add_action ('wp_enqueue_scripts','styleConnect');

function styleConnect(){

    wp_enqueue_style('minify',get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style('mainCss',get_stylesheet_uri());

    wp_enqueue_script('jsMinify',get_template_directory_uri().'/js/all.min.js');
    
};

require_once "opt/redux-core/framework.php";
require_once "opt/sample/config.php";

require_once "cmb/config.php";
require_once "cmb/init.php";
















?>