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
<nav class="nav-social col-md flex-column py-3" id="navbar-socials">
    <div class="row text-center">
        <a class="navbar-brand my-3" href="<?php echo esc_url( home_url( '/' ) );?>">
            <img class="img" src="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/logos/logo-branca.svg" alt="Logotipo do site">
        </a>
        
        
        <div class="comercial-info">
            <span class="phone-number"><i class="fa-solid fa-phone"></i> (41) 99631-6848</span><br>
            <span class="email"><i class="fa-solid fa-envelope"></i> contato@renandev.com.br</span>
        </div>
        <div class="box-social py-3">
            <h4 class="footer-title">Siga na Redes Sociais</h4>
            <?php 

            // Call da barra de navegação, se configurada
            if( has_nav_menu( 'socials' ) ):
                wp_nav_menu(
                    array(
                        'theme_location' => 'socials',
                        'menu_class'     => 'nav d-flex justify-content-center social-list',
                        'conatiner'      => false,
                        'link_before'    => '<i class="fa-brands fa-',
                        'link_after'     => '"></i>'
                    )
                );
            endif;
            ?>
        </div>
    </div>
</nav>
<!-- Início da Barra de Navegação Redes Sociais -->