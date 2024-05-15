<?php 
/**
 * 
 * Barra de Navegação para links de Páginas
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início da Barra de Navegação de Links de Páginas -->
<nav class="" id="navbar-pages">
    <div class="">
        <?php 

        // Call da barra de navegação, se configurada
        if( has_nav_menu( 'pages' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'pages',
                    'menu_class'     => '',
                    'conatiner'      => false
                )
            );
        endif;
        ?>
    </div>
</nav>
<!-- Início da Barra de Navegação de Links de Páginas -->
