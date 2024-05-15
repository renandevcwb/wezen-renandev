<?php 
/**
 * 
 * Barra de Navegação Contendo os Principais Links do Site
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início da Barra de Navegação de Links Principais -->
<nav class="navbar navbar-expand-md fixed-top wezen-navbar-top" id="navTop" role="navigation">
    <div class="container-fluid">
        <div class="col-md d-flex py-1 px-0 justify-content-between align-items-center">
            <button class="navbar-toggler ns-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>">
                <img src="<?php echo esc_url( get_bloginfo( 'template_url' ) . '/assets/logos/logo-branca.svg' );?>" alt="Logotipo para barra superior do site"/>
            </a>
            <div class="d-flex justify-content-end">
                <button class="navbar-toggler ns-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#searchSupportedContent" aria-controls="searchSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        <div class="wezen-nav-list collapse navbar-collapse d-md-flex justify-content-md-end justify-content-sm-center" id="navbarSupportedContent">
            <?php 

            // Call da barra de navegação, se configurada
            if( has_nav_menu( 'mainlinks' ) ):
                wp_nav_menu(
                    array(
                        'theme_location' => 'mainlinks',
                        'menu_class'     => 'navbar-nav navbar-top text-center',
                        'conatiner'      => false
                    )
                );
            endif;
            ?>
        </div>
    </div>
</nav>
<!-- Fim da Barra de Navegação de Links principais -->
