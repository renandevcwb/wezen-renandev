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
<form  class="form-group d-flex wezen-search w-100" action="<?php echo esc_url( home_url( '/' ) );?>" method="get" role="search">
    <input class="form-control wezen-control rounded-0" type="search" placeholder="O que você está procurando?" autocomplete="on" name="s"/>
    <button type="submit" class="btn btn-search rounded-0 text-secondary">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</form>
<!-- Fim do Formulário de Busca -->
