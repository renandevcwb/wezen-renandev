<?php 
/**
 * 
 * Card para exibição de cabeçalho
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>

<?php if( is_home() ):?>
    <!-- Início de cabeçalho -->
    <header class="container-fluid bg-third-color py-5 text-white" role="banner">
        <div class="row d-flex justify-content-center align-items-center text-center py-2">
            <h1 class="page-title">RenanDev - Desenvolvimento Web</h1>
            <span class="page-description">O mundo da tecnologia visto de outra forma</span>
        </div>
        <div class="row">
            <?php 
            // Call de BreadCrumb da Yoast SEO
            if( function_exists('yoast_breadcrumb') ):
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            endif;
            ?>
        </div>
    </header>
    <!-- Fim de cabeçalho -->
<?php elseif( is_category() ):?>
    <!-- Início de cabeçalho -->
    <header class="container-fluid bg-third-color" role="banner">
        <div class="row d-flex justify-content-center align-items-center">
            <h1 class="page-title"><?php echo esc_html( get_the_category() );?></h1>
        </div>
        <div class="row">
            <?php 
            // Call de BreadCrumb da Yoast SEO
            if( function_exists('yoast_breadcrumb') ):
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            endif;
            ?>
        </div>
    </header>
    <!-- Fim de cabeçalho -->
<?php elseif( is_archive() ):?>
    <!-- Início de cabeçalho -->
    <header class="container-fluid bg-third-color" role="banner">
        <div class="row d-flex justify-content-center align-items-center">
            <h1 class="page-title"><?php echo esc_html( get_the_archive_title() );?></h1>
            <span class="page-description"><?php echo esc_html( get_the_achive_description() );?></span>
        </div>
        <div class="row">
            <?php 
            // Call de BreadCrumb da Yoast SEO
            if( function_exists('yoast_breadcrumb') ):
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            endif;
            ?>
        </div>
    </header>
    <!-- Fim de cabeçalho -->
<?php endif;


