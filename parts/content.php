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
if( !is_page() || !is_front_page() || !is_single() ):?>
<!-- Início do Conteúdo Principal -->
<main class="container-fluid py-5">
    <!-- Início da Seção de Posts -->
    <section class="row posts-section">
<?php 
endif;

/**
 * Call dos elementos de conteúdo de acordo com as respectivas páginas
 */ 

// Call do loop padrão em páginas e página inicial estática
if( is_page() || is_front_page() || is_single() ):

    // The Loop
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            the_content();
        endwhile;
    endif;

    // Apenas para post único
    if( is_single() ):
        // Call da seção de comentários
        if( comments_open() ):
            wezen_get_part( 'comments' );
        endif;
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
    ?>
    <main class="container-fluid d-flex justify-content-center align-items-center">
        <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/404.png" alt="Erro 404, página não encontrada"/>
    </main>
    <?php 
endif;

// Fechamento de Tag principal
if( !is_page() || !is_front_page() || !is_single() ):?>
    </section>
    <!-- Fim da Seção de Posts -->
</main>
<!-- Fim do Conteúdo Principal -->
<?php 
endif;
