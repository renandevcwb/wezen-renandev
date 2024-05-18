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
<nav class="navbar navbar-expand-md sticky-top wezen-navbar-top bg-second-color" id="navTop" role="navigation">
    <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>">
                <img src="<?php echo esc_url( get_bloginfo( 'template_url' ) . '/assets/logos/logo-blue.svg' );?>" alt="Logotipo para barra superior do site"/>
            </a>
            <button class="navbar-toggler ns-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="col-md collapse navbar-collapse d-md-flex justify-content-md-end justify-content-sm-center" id="navbarSupportedContent">
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
