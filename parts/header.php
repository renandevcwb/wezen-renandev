<?php 
/**
 * 
 * Modelo de Cabeçalho
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

// Call da barra superior de navegação
if( is_home() ):

    // Call da barra de categorias, em caso da página ser o blog
    wezen_get_component( 'nav', 'categories' );
else: 

    // Para todas as outras páginas, faz a call da barra de links principais
    wezen_get_component( 'nav', 'mainlinks' );
endif;

// Call de cabeçalhos para determindas requisições
if( !is_page() || !is_front_page() ):?>
<!-- Início de cabeçalho -->
<header class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
        <h1 class="page-title"></h1>
    </div>
</header>
<!-- Fim de cabeçalho -->
<?php 
endif;
