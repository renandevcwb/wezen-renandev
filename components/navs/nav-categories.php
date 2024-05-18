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
<nav class="navbar navbar-expand-md sticky-top wezen-navbar-top bg-second-color" id="navTop" role="navigation">
    <div class="container-fluid">
        <div class="row w-100 m-0 p-0">
            <div class="col d-flex justify-content-between align-items-center py-1 px-0">
                <button class="navbar-toggler wezen-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo esc_url( get_bloginfo( 'template_url' ) . '/assets/logos/logo-blue.svg' );?>" alt="Logotipo para barra superior do site"/>
                </a>
                <button class="navbar-toggler wezen-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#searchSupportedContent" aria-controls="searchSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="col-md d-md-flex align-items-center justify-content-center">
            <div class="col collapse navbar-collapse d-md-flex align-items-center justify-content-center" id="searchSupportedContent">
                <?php wezen_get_component( 'form', 'search' );?>
            </div>
            </div>
            <div class="col-md d-md-flex align-items-center justify-content-center">
            <div class="col collapse navbar-collapse d-md-flex justify-content-md-end justify-content-sm-center" id="navbarSupportedContent">
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
        </div>
    </div>
</nav>
<!-- Início da Barra de Navegação de Categorias -->
