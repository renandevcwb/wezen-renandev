<?php 
/**
 * 
 * Modelo de Rodapé
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */

// Call do formulário de newsletter
wezen_get_component( 'form', 'newsletter' );
?>
<!-- Início do Rodapé -->
<footer class="container-fluid bg-color-mix pt-5 small-text" role="complementary">
    <!-- Início das Barras de Navegação da Parte Inferior do Site --> 
    <div class="row navbar-footer py-3">
        <?php 
        // Call da barra de navegação Pages
        wezen_get_component( 'nav', 'pages' );

        // Call da barra de navegação de Redes Sociais
        wezen_get_component( 'nav', 'socials' );
        ?>
    </div>
    <!-- Fim das Barras de Navegação da Parte Inferior do Site -->
    <!-- Início do Módulo de Direitos Autorais -->
    <div class="row copyrights-footer py-2 text-center">
        <?php 
        // Call do card de copyrights
        wezen_get_component( 'card', 'copyrights' );
        ?>
    </div>
    <!-- Fim do Módulo de Direitos Autorais -->
</footer>
<!-- Fim do Rodapé -->
