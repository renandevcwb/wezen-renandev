<?php 
/**
 * 
 * Card para Loop de Posts
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início de Post -->
<a href="<?php echo esc_url( the_permalink() );?>" class="card card-post">
    <div class="card-body post-body">
        <?php 
        // Call de imagens para Thumbnails
        if( !has_post_thumbnail() ):

            // Call de imagem padrão, caso não haja thumbnail para o post
            echo '<img class="card-img post-img" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/no-photo.png" alt="Post sem Imagem de Thumbnail"/>';
        else:

            // Call da Tnumbnail, caso esteja configurada para o post
            the_post_thumbnail( 'medium', array( 'class' => 'card-img post-img', 'alt' => 'Thumnail de postagem' )  );
        endif;
        ?>
        <h3 class="card-title post-title">
            <?php echo esc_html( the_title() );?>
        </h3>
        <p class="card-text post-text">
            <?php echo esc_html( the_excerpt() );?>
        </p>
    </div>
</a>
<!-- Fim de Post -->
