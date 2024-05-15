<?php 
/**
 * 
 * Modelo de Conteúdo
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

// Call do módulo de content
if( !is_page() || !is_front_page() ):?>
<!-- Início do Conteúdo Principal -->
<main class="container-fluid">
    <!-- Início da Seção de Posts -->
    <section class="row posts-section">
<?php 
endif;

/**
 * Call dos elementos de conteúdo de acordo com as respectivas páginas
 */ 

// Call do loop padrão em páginas e página inicial estática
if( is_page() || is_front_page() ):

    // The Loop
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            the_content();
        endwhile;
    endif;

// Call do Loop para posts padrão
elseif( is_home() || is_archive() || is_category() ):

    // The Loop
    if( have_posts() ):
        while( have_posts() ):
            the_post();

            // Call do card para posts
            wezen_get_component( 'card', 'post' );
        endwhile;
    endif;

// Call do Loop para busca interna, formato posts
elseif( is_search() ):

    // trata as informações passadas pelo formulário de pesquisa
    $wezen_term   = get_search_query();
    $args         = array( 's' => $wezen_term );
    $wezen_search = new WP_Query( $args );
    $number_posts = $wezen_search->post_count;

    // The Loop
    if( $wezen_search->have_posts() ):
        while( $wezen_search->have_posts() ):
            $wezen_search->the_post();

            // Call do card para posts
            wezen_get_component( 'card', 'post' );
        endwhile;
    endif;

elseif( is_404() ):
    // Design de acordo com o projeto
endif;

// Fechamento de Tag principal
if( !is_page() || !is_front_page() ):?>
    </section>
    <!-- Fim da Seção de Posts -->
</main>
<!-- Fim do Conteúdo Principal -->
<?php 
endif;
