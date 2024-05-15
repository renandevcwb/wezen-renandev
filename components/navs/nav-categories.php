<?php 
/**
 * 
 * Barra de Navegação para links de Categorias
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início da Barra de Navegação de Categorias -->
<nav class="" id="navbar-categories">
    <div class="">
        <?php 

        // Call da barra de navegação, se configurada
        if( has_nav_menu( 'categories' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'categories',
                    'menu_class'     => '',
                    'conatiner'      => false
                )
            );
        endif;
        ?>
    </div>
</nav>
<!-- Início da Barra de Navegação de Categorias -->
