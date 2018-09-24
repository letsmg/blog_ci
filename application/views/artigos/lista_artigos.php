<div class="container">
    <div class="col-sm-10 offset-sm-1 py-100">
       <table class="table table-striped table-responsive">
           <thead>
               <tr>
                   <th class="table-primary">Título</th>
                   <th class="table-primary">Sub-título</th>
                   <th class="table-primary">Usuário</th>
                   <th class="table-primary">Data da publicação</th>
               </tr>
           </thead>
           <tbody>
       <?php
           if(!isset($artigos)){
       ?>
               <td colspan='4'>Nenhum artigos cadastrado ainda.</td>
       <?php
           }else{
               foreach ($artigos as $artigos){
       ?>
               <tr>
                   <td><?= $artigos->titulo ?></td>
                   <td><?= $artigos->subtitulo ?></td>
                   <td><?= $artigos->usuario ?></td>
                   <td><?= $artigos->dt_publicacao ?></td>
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