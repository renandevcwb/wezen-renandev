<?php 
/**
 * 
 * Arquivo inicial do tema, não exclua
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/595eb97298.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicons/site.webmanifest">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <?php wp_head();?>
    </head>
    <body class="wezen-body text-white" style="background-color: black;">
        <?php 
        wezen_get_header();
        wezen_get_content();
        wezen_get_footer();
        wp_footer();
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        
    </body>
</html>
