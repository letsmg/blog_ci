<div class='container d-flex flex-column mt-50'>

    <section class="col-sm-6 offset-sm-3">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Entre com seus dados</h5>
                    <form id='yy' class='form-horizontal'>

                    <input type="hidden" name="csrf_test_name" value="<?= $this->security->get_csrf_hash(); ?>" />

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
                        <label for='mensagem'></label>
                        <textarea name='mensagem' id='mensagem' rows='5' cols='50'
                            placeholder='Mensagem' class='form-control'></textarea>
                        <div class='text-muted small'></div>
                    </div>

                    <div class='form-group'>
                        <div id='retorno' class='alert alert-success invisible'></div>
                        <button class='btn btn-tema' type='submit'>
                            <span class='fa fa-send'></span>
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>