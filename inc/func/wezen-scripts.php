<?php 
/**
 * 
 * Call de Scripts e Styles
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

// Call de Scripts e Styles
function wezen_get_scripts(){

    // Arquivo js padrão do tema
    wp_enqueue_script( 'wezenScript', get_template_directory_uri(). '/assets/js/wezen.js', array(), '1.0.0', true );

    // Arquivo CSS Padrão do tema
    wp_enqueue_style( 'wezenCss', get_template_directory_uri() . '/assets/css/wezen.css', array(), '1.0.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'wezen_get_scripts' );
