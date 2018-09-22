<div class='container d-flex flex-column mt-50'>

    <section class="col-sm-6 offset-sm-3">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Entre com seus dados</h5>
                    <form id='login' class='form-horizontal'>

                    <input type="hidden" name="csrf_test_name" value="<?= $this->security->get_csrf_hash(); ?>" />

                    <div class='form-group'>
                        <label for='email'></label>
                        <input type='text' id='email' name='email' class='form-control' required>
                        <div class='text-muted small'>E-mail</div>
                    </div>

                    <div class='form-group'>
                        <label for='senha'></label>
                        <input type='text' id='senha' name='senha' class='form-control'
                       required maxlength='30'>
                        <div class='text-muted small'>Senha</div>
                    </div>


                    <div class='form-group'>

                        <div id='ret_login' ></div>

                        <button class='btn btn-tema' type='submit'>
                            <span class='fa fa-user-secret'></span>
                            Logar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('#login').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('login/verifica'); ?>',
                data: $(this).serialize(),
                type: 'post',
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    if (data.msg == 1) {
                        //alert('asdf');
                        location.href = "admin";
                    } else {
                        $('#ret_login').hide(400);
                        setTimeout(() => {
                            $('#ret_login').show(400).html(data.msg);
                        }, 500);
                        $("input[name='csrf_test_name']" ).val(data.csrf);
                    }
                }
            });
        });
    });
</script>