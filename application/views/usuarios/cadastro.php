<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container">
    <section class="col-sm-6 offset-sm-3">

        <form id='cadusu' class='form-horizontal'>
            
            <div class='form-group'>
                <label for='nome'></label>
                <input type='text' id='nome' name='nome' class='form-control' required>
                <div class='text-muted small'>Nome</div>
            </div>

            <div class='form-group'>
                <label for='email'></label>
                <input type='text' id='email' name='email' class='form-control' required>
                <div class='text-muted small'>E-mail</div>
            </div>

            <div class='form-group'>
                <label for='senha'></label>
                <input type='text' id='senha' name='senha' class='form-control' required>
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
        if(e.isDefaultPrevented()) {
            /*NAO PRECISA FAZER NADA QUE JA DA O AVISO, o codigo abaixo nao funfa aqui
            * $('html, body').animate({ scrollTop: 0 }, 500);
            * */     
        } else {
            e.preventDefault();
            $.ajax({
                type: 'post', 
                url: 'usuarios/cadastra',
                data: $('cadusu').serialize(),
                success: function(){
                    $('#ret_cad').html("teste");
                }
            });
        }
    });


    $('#excluir').on('click', function (e){
        var confirma = confirm(
    ); 
        if(confirma){
            if(e.isDefaultPrevented()){
                /*NAO PRECISA FAZER NADA QUE JA DA O AVISO, o codigo abaixo nao funfa aqui
                 * $('html, body').animate({ scrollTop: 0 }, 500);
                 * */
            }else{
                e.preventDefault();
                $.ajax({
                    url: '<?= base_url(''); ?>',
                    type: 'POST',
                    data: 'codigo='+$('#codigo').val()+'&csrf_test_name='+$('[name=csrf_test_name]').val(),
                    dataType: 'json',
                    success: function (msg) {
                        $('[name=csrf_test_name]').val(msg.csrf);
                        $('').hide('fast');
                        $('').html(msg.msg);
                        $('').show('fast');
                        $('html, body').animate({scrollTop: $('#ret_alt_jogador').offset().top-70}, 500);
                        setTimeout(function(){
                            window.location.href='../lista';
                        }, 2000);
                    }
                });
            }
        }
    });

</script>