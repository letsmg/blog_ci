<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-tema">
  <a class="navbar-brand" href="<?= base_url(); ?>">Blog em Code Igniter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php /*
      pode ser usado para seguidores comentar os posts
      <li class="nav-item">        
        <a class="nav-link" href="seguidores/cadastro">Cadastre-se</a>
      </li>
      */ ?>
      <li class="nav-item">        
        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Procurar">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>