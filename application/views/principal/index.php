<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container py-100">


    <h1 class='text-center'>
        Bem-vindo ao
        <?php
            if (is_null($nome)) {
                echo "(seu blog!)";
            } else {
                echo $nome->nome_blog;
            }
        ?>

        </h1>

    <article class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 text-center">
        <?php
            if(!isset($posts)){
        ?>
                <h5>Oops, nenhum artigo cadastrado ainda!</h5>
                <p>Cadastre um artigo para aparecer aqui</p>

                <div class="row">
                    <div class="col-6 p-0">
                        <img src="<?= base_url('img/i1.jpg') ?>" alt="i1" class='img-fluid'>
                    </div>
                    <div class="col-6 p-0">
                        <img src="<?= base_url('img/i2.jpg')  ?>" alt="i2" class='img-fluid'>
                    </div>
                    <div class="col-6 p-0">
                        <img src="<?= base_url('img/i3.jpg') ?>" alt="i3" class='img-fluid'>
                    </div>
                    <div class="col-6 p-0">
                        <img src="<?= base_url('img/i4.jpg') ?>" alt="i4" class='img-fluid'>
                    </div>                    
                </div>

                 
        <?php
            }else{
                foreach($posts as $post){
            ?>
                <h2><?= $post->titulo; ?> </h2>
                <h3>Postado por<?= $post->usuario ?> em <?= $post->dt_publicacao ?></h3>

                <p><?= $post->conteudo ?></p>
                <hr>
            <?php
                }
            }
        ?>

    </article>

</main>