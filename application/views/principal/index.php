<main class="container">
    
    <h1 class='text-center'>Bem-vindo ao Super Blog</h1>
    
    <article class="col-sm-8 offset-sm-2">
        <?php
            if(!isset($posts)){
        ?>
                <span class="fa fa-money"></span> Oops, nenhum artigo cadastrado ainda!
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
    