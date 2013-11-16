<?php 

function wpbootstrap_scripts_with_jquery()
{

// register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . 'js/bootstrap.js', array( 'jquery' ) );     
    wp_register_script( 'jquery-tweet', get_template_directory_uri() . 'js/jquery.tweet.js', array( 'jquery' ) );
    wp_register_script( 'clock', get_template_directory_uri() . 'js/clock.js', array( 'jquery' ) ); 
    wp_register_script( 'soon', get_template_directory_uri() . 'js/soon.js', array( 'jquery' ) );

//footer scripts     
    wp_register_script( 'dat-gui-min-js', get_template_directory_uri() . 'js/dat.gui.min.js' );
    wp_register_script( 'fss', get_template_directory_uri() . 'js/fss.js');
    wp_register_script( 'bgCustom', get_template_directory_uri() . 'js/bgCustom.js');


// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script','jquery-tweet','clock','soon','dat-gui-min-js','fss','bgCustom');
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>
