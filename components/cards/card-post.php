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
<div class="col-md-3">
    <div class="card card-post rounded-0 text-center">
        <?php 
        // Call de imagens para Thumbnails
        if( has_post_thumbnail() ):
            // Call da Tnumbnail, caso esteja configurada para o post
            the_post_thumbnail( 'medium', array( 'class' => 'card-img post-img', 'alt' => 'Thumnail de postagem' )  );
        endif;
        ?>
        <div class="card-body post-body">
            
            <h3 class="card-title post-title">
                <?php echo esc_html( the_title() );?>
            </h3>
            <p class="card-text post-text mb-2">
                <?php echo esc_html( the_excerpt() );?>
            </p>
            <div class="d-flex justify-content-end">
            <a class="post-link text-end" href="<?php echo esc_url( the_permalink() );?>">
                Continue Lendo
            </a>
            </div>
        </div>
    </div>
</div>
<!-- Fim de Post -->
