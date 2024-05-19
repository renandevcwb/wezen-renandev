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
}elseif( is_archive() || is_single() ){
    $wezen_set_title       = get_the_title();
}
?>
<!-- Início de cabeçalho -->
<header class="container-fluid bg-third-color py-5 text-white" role="banner">
    <div class="row d-flex justify-content-center align-items-center text-center py-2">
        <h1 class="page-title">
            <?php 

            // Call do Título
            echo $wezen_set_title;
            ?>
        </h1>
        <?php 

        // Call da descrição
        if( $wezen_set_description != false ){
            echo '<span class="page-description">' . $wezen_set_description .'</span>';
        }
        ?>
    </div>
</header>
<!-- Fim de cabeçalho -->
<!-- Início do Caminho de Navegação -->
<div class="container-fluid">
    <div class="row">
        <?php 
        // Call de BreadCrumb da Yoast SEO
        if( function_exists('yoast_breadcrumb') ):
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        endif;
        ?>
    </div>
</div>
<!-- Fim do Caminho de Navegação -->
<?php if( is_single() ):?>
<!-- Início dos Dados do Autor -->
<div clas="container-fluid">
    <div class="row">
        <span class="author-title">Publicado por <?php echo get_the_author();?></span>
        <span class="author-description"><?php echo esc_html( the_author_meta( 'description' ) );?></span>
    </div>
</div>
<!-- Fim dos Dados do Author -->
<?php endif;
