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
<nav class="navbar navbar-expand-md color-top-nav" id="navbar-mainlinks">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>">
        <img src="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/logos/logo-branca.svg" alt="Logotipo oficial">
    </a>
    <div class="">
        <?php 

        // Call da barra de navegação, se configurada
        if( has_nav_menu( 'mainlinks' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'mainlinks',
                    'menu_class'     => '',
                    'conatiner'      => false
                )
            );
        endif;
        ?>
    </div>
</nav>
<!-- Início da Barra de Navegação de Links principais -->
