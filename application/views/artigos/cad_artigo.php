<main class="container">
    <section class="col-sm-6 offset-sm-3 pt-50">

        <div class="card my-5 bg-cinza-c">
            <div class="card-body">
                <h5 class="card-title">Novo artigo</h5>

                <form id='cadart' class='form-horizontal'>
                    <input type="hidden" name="csrf_test_name" value="<?= $this->security->get_csrf_hash(); ?>" />

                    <div class='form-group'>
                        <label for='titulo'></label>
                        <input type='text' id='titulo' name='titulo' class='form-control'
                    required maxlength='30'>
                        <div class='text-muted small'>Título</div>
                    </div>

                    <div class='form-group'>
                        <label for='subtitulo'></label>
                        <input type='text' id='subtitulo' name='subtitulo' class='form-control'
                    required maxlength='30'>
                        <div class='text-muted small'>Subtítulo 1</div>
                    </div>

                    <div class='form-group'>
                        <label for='secao'></label>
                        <textarea name='secao' id='secao' rows='5' cols='50'
                            placeholder='Seção 1' class='form-control'></textarea>
                        <div class='text-muted small'></div>
                    </div>

                    <div class='form-group'>
                        <label for='subtitulo2'></label>
                        <input type='text' id='subtitulo2' name='subtitulo2' class='form-control'
                       required maxlength='30'>
                        <div class='text-muted small'>Subtitulo 2</div>
                    </div>

                    <div class='form-group'>
                        <label for='secao2'></label>
                        <textarea name='secao2' id='secao2' rows='5' cols='50'
                            placeholder='Seção 2' class='form-control'></textarea>
                        <div class='text-muted small'></div>
                    </div>

                    <div class='form-group'>
                        <label for='subtitulo3'></label>
                        <input type='text' id='subtitulo3' name='subtitulo3' class='form-control'
                       required maxlength='30'>
                        <div class='text-muted small'>Subtitulo 3</div>
                    </div>

                    <div class='form-group'>
                        <label for='secao3'></label>
                        <textarea name='secao3' id='secao3' rows='5' cols='50'
                            placeholder='Seção 3' class='form-control'></textarea>
                        <div class='text-muted small'></div>
                    </div>

                    <div class='form-group'>
                        <div id='ret_cad_art'></div>
                        <button class='btn btn-tema' type='submit'>
                            <span class='fa fa-send'></span>
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


<script>
    $(document).ready(function(){
        $('#cadart').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('artigos/cadastra'); ?>',
                data: $(this).serialize(),
                type: 'post',
                dataType: 'json',
                success: function(data){
                console.log(data);
                    $('#ret_cad_art').hide(400);
                    setTimeout(() => {
                        $('#ret_cad_art').show(400).html(data.msg);
                        $("input[name='csrf_test_name']" ).val(data.csrf);
                    }, 500);
                }
            });
        });
    });
</script>