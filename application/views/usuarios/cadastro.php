<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container d-flex flex-column">

    <section class="col-sm-6 offset-sm-3 mt-100">

        <h2>Cadastro de Usuário</h2>

        <form id='cadusu' class='form-horizontal'>
            
            <input type="hidden" name="csrf_test_name" value="<?= $this->security->get_csrf_hash(); ?>" />
             
            <div class='form-group'>
                <label for='nome'></label>
                <input type='text' id='nome' name='nome' class='form-control' required>
                <div class='text-muted small'>Nome</div>
            </div>

            <div class='form-group'>
                <label for='email'></label>
                <input type='email' id='email' name='email' class='form-control' required>
                <div class='text-muted small'>E-mail</div>
            </div>

            <div class='form-group'>
                <label for='senha'></label>
                <input type='password' id='senha' name='senha' class='form-control' required>
                <div class='text-muted small'>Senha</div>
            </div>

            <div class='form-group'>
                <div id='retorno' class='alert alert-success invisible'></div>
                <button class='btn btn-tema' type='submit'>
                    <span class='fa fa-send'></span>
                    Enviar
                </button>
            </div>
        </form>

        <div id='ret_cad'></div>

    </section>
</main>


<script>
    $(document).ready(function(){
        $('#cadusu').on('submit',function(e){
            if(e.isDefaultPrevented()) {
                /*NAO PRECISA FAZER NADA QUE JA DA O AVISO, o codigo abaixo nao funfa aqui
                * $('html, body').animate({ scrollTop: 0 }, 500);
                * */
            } else {
                e.preventDefault();
                $.ajax({
                    type: 'post', 
                    url: "<?= base_url('usuarios/cadastra'); ?>",
                    data: $('#cadusu').serialize(),
                    success: function(msg){
                        $('#ret_cad').html(msg.msg);
                        $("input[name='csrf_test_name']").val(msg.csrf);                        
                    }
                });
            }
        });
    });

</script>