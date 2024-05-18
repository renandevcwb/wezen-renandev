<?php 
/**
 * 
 * Card para exibição de cabeçalho
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

// Inicia as variáveis de título e descrição
$wezen_set_title       = '';
$wezen_set_description = false;

// Define os valores para cada tipo de requisição
if( is_home() ){
    $wezen_set_title       = 'RenanDev - Desenvolvimento Web';
    $wezen_set_description = 'O mundo da tecnologia visto de outra forma';
}elseif( is_category() ){
    $wezen_set_title       = get_the_category();
}elseif( is_archive() ){
    $wezen_set_title       = get_the_archive_title();
    $wezen_set_description = get_the_achive_description();
}
?>
<!-- Início de cabeçalho -->
<header class="container-fluid bg-third-color py-5 text-white" role="banner">
    <div class="row d-flex justify-content-center align-items-center text-center py-2">
        <h1 class="page-title">
            <?php 

            // Call do Título
            echo esc_html( $wezen_set_title );
            ?>
        </h1>
        <?php 

        // Call da descrição
        if( $wezen_set_description != false ){
            echo '<span class="page-description">' . esc_html( $wezen_set_description ) .'</span>';
        }
        ?>
    </div>
    <div class="row">
        <?php 
        // Call de BreadCrumb da Yoast SEO
        if( function_exists('yoast_breadcrumb') ):
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        endif;
        ?>
    </div>
</header>
<!-- Fim de cabeçalho -->
