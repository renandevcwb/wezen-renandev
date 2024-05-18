<?php 
/**
 * 
 * Barra de Navegação Complementar para Rodapé
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início da Barra de Navegação Complementar para Rodapé -->
<nav class="nav-infos col-md py-3" id="navbar-complementary">
    <h3 class="footer-title">Links Populares</h3>
    <div class="nav-other-links">
        <?php 

        // Call da barra de navegação, se configurada
        if( has_nav_menu( 'complementary' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'complementary',
                    'menu_class'     => 'nav flex-column nav-pages',
                    'conatiner'      => false
                )
            );
        endif;
        ?>
    </div>
</nav>
<!-- Início da Barra de Navegação Complementar para Rodapé -->