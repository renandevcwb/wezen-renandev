<?php 
/**
 * 
 * Formulário de Pesquisa
 * 
 * @package wezen-business
 * @since 1.0.0
 * 
 */?>
<!-- Início do Formulário de Busca -->
<form  class="form-group d-flex wezen-search rounded-0" action="<?php echo esc_url( home_url( '/' ) );?>" method="get" role="search">
    <input class="form-control wezen-control" type="search" placeholder="O que você está procurando?" autocomplete="on" name="s"/>
    <button type="submit" class="btn btn-search">
        <i class="fa-solid fa-magnifying-glass"></i> 
    </button>
</form>
<!-- Fim do Formulário de Busca -->
