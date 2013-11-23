<?php 
// register custom jquery:
function register_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.8.2.min.js', false, null );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'register_jquery', 11 );


// enqueue bootstrap:
function enqueue_boostrap_script() {
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_boostrap_script' );


// enqueue scripts for splash screen:
function enqueue_splash_scripts() {
    wp_register_script( 'splash', get_template_directory_uri() . '/js/splash.js', array( 'jquery' ) );

    //footer scripts     
    wp_register_script( 'dat-gui-min-js', get_template_directory_uri() . '/js/dat.gui.min.js', array(), false, true );
    wp_register_script( 'fss', get_template_directory_uri() . '/js/fss.js', array(), false, true );
    wp_register_script( 'bgCustom', get_template_directory_uri() . '/js/bgCustom.js', array(), false, true );

    wp_enqueue_script( array( 'splash', 'dat-gui-min-js', 'fss', 'bgCustom' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_splash_scripts' );