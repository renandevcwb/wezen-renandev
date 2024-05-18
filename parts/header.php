<?php 
/**
 * 
 * Modelo de Cabeçalho
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

/**
 * Obs: Menu mainlinks excluido das requisições para este projeto
 */

// Call da barra superior de navegação
wezen_get_component( 'nav', 'categories' );

// Call de Cabeçalhos
if( is_home() || is_archive() || is_category() ):
    wezen_get_component( 'card', 'header' );
endif;
