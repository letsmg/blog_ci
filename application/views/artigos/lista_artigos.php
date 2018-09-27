<div class="container">
    <div class="col-sm-10 offset-sm-1 py-100">
       <table class="table table-striped table-responsive">
           <thead>
               <tr>
                   <th class="table-primary">Título</th>
                   <th class="table-primary">Sub-título</th>
                   <th class="table-primary">Usuário</th>
                   <th class="table-primary">Data da publicação</th>
                   <th class="table-primary"></th>
               </tr>
           </thead>
           <tbody>
       <?php
           if(!isset($artigos)){
       ?>
               <td colspan='4'>Nenhum artigos cadastrado ainda.</td>
       <?php
           }else{
               foreach ($artigos as $artigo){
       ?>
               <tr>
                   <td><?= substr($artigo->titulo,0,10) ?>...</td>
                   <td><?= substr($artigo->subtitulo,0,10) ?>...</td>
                   <td><?= $artigo->usuario ?></td>
                   <td><?= date('d/m/Y H:i:s', strtotime($artigo->dt_publicacao)) ?></td>
                   <td>
                        <a href="artigos/edicao/<?= $artigo->id_artigo ?>">
                            Editar
                        </a>
                    </td>
               </tr>
           <?php
               }
            }
           ?>
           </tbody>
           <tfoot></tfoot>            
       </table>
    </div>
</div>