<?php 

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

   
}


function assest(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1','all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap','','1.0', 'all');
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');
   
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0', true);
    wp_enqueue_script('boostraps', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'),'4.4.1', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assest/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts','assest');


function MenuPrincipal(){
    $location= array(
        'primary'=>"Menu Superiror",
    );
    register_nav_menus( $location );

}

add_action( 'init', 'MenuPrincipal');

add_theme_support( 'post-thumbnails' );
