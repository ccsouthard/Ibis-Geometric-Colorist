<?php 

function wpbootstrap_scripts_with_jquery()
{
    // register the scripts for a theme:
    wp_register_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-1.8.2.min.js', array( 'jquery' ) );
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
    wp_register_script( 'splash', get_template_directory_uri() . '/js/splash.js', array( 'jquery' ) );

    //footer scripts     
    wp_register_script( 'dat-gui-min-js', get_template_directory_uri() . '/js/dat.gui.min.js', array(), false, true );
    wp_register_script( 'fss', get_template_directory_uri() . '/js/fss.js', array(), false, true );
    wp_register_script( 'bgCustom', get_template_directory_uri() . '/js/bgCustom.js', array(), false, true );

    // Enqueue the script:
    wp_enqueue_script( array( 'jquery-min','custom-script', 'splash', 'dat-gui-min-js', 'fss', 'bgCustom' ) );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
