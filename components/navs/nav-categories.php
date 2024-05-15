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
    <div class="container-fluid">
        <div class="wezen-top-navbar collapse navbar-collapse d-md-flex justify-content-md-end justify-content-sm-center">
            <?php 

            // Call da barra de navegação, se configurada
            if( has_nav_menu( 'categories' ) ):
                wp_nav_menu(
                    array(
                        'theme_location' => 'categories',
                        'menu_class'     => 'navbar-nav navbar-top text-center',
                        'conatiner'      => false
                    )
                );
            endif;
            ?>
        </div>
    </div>
</nav>
<!-- Início da Barra de Navegação de Categorias -->
