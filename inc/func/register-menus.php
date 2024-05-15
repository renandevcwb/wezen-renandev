<?php 
/**
 * 
 * Registro e Manipulação de Barras de Navegação
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

// Regitra as barras de navegação
function wezen_register_menus(){

    register_nav_menus(
        array(
            'mainlinks'  => 'Barra de Navegação para Principais Links',
            'pages'      => 'Barra de Navegação para Páginas',
            'categories' => 'Barra de Navegação de Categorias',
            'socials'    => 'Barra de Navegação de Redes Sociais'
        )
    );
}

add_action( 'after_setup_theme', 'wezen_register_menus' );

// Adiciona Classes a tag li para Barras de Navegação
function wezen_set_li_class( $classes, $item, $args ){

    $classes[] = 'nav-item';

    return $classes;

}

add_filter('nav_menu_css_class', 'wezen_set_li_class', 1, 3);

// Adiciona Classes a tag âncora das Barras de Navegação
function wezen_add_link_atts( $atts ){

    $atts['class'] = "nav-link";

    return $atts;

}

add_filter( 'nav_menu_link_attributes', 'wezen_add_link_atts');

// Adiciona a classe active na página atual
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
      $classes[] = 'active ';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
