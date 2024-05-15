<?php 
/**
 * 
 * Arquivo de manipulação do Core do WordPress
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */


// Ativa os suportes de tema necessários
function set_theme_supports(){

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );

}

add_action( 'after_setup_theme', 'set_theme_supports' );

/**
 * 
 * Seção de function calls do template
 * 
 * @since 1.0.0
 *  
 */

// Função para call de componentes
function wezen_get_component( $arg, $slug ){
    
    $plural = $args . 's';

    get_template_part( 'components/' . $plural . '/' . $args, $slug );

}

// Método para retorno de header
function wezen_get_header(){

    get_template_part( 'parts/header' );

}

// Método para retorno de corpo de página
function wezen_get_content(){

    get_template_part( 'parts/content' );

}

// Método para retorno do rodapé
function wezen_get_footer(){

    get_template_part( 'parts/footer' );

}

/**
 * Call dos arquivos de inc/func
 */

// Registro de menus e inclusão de classes nas tags li's e a's
require_once get_template_directory() . '/inc/func/register-menus.php';

// Inclui os scripts e styles próprios
require_once get_template_directory() . '/inc/func/wezen-scripts.php';
