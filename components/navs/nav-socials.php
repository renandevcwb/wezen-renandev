<?php 
/**
 * 
 * Barra de Navegação para links de Redes Sociais
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início da Barra de Navegação de Redes Sociais -->
<nav class="" id="navbar-socials">
    <div class="">
        <?php 

        // Call da barra de navegação, se configurada
        if( has_nav_menu( 'socials' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'socials',
                    'menu_class'     => '',
                    'conatiner'      => false
                )
            );
        endif;
        ?>
    </div>
</nav>
<!-- Início da Barra de Navegação Redes Sociais -->