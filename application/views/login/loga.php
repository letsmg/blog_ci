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
                        <div id='ret_login' class='alert alert-success invisible'></div>
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
                url: '{{ url('login/verifica') }}
                data: $(this).serialize(),
                type: 'post',
                dataType: 'json',
                success: function(data){
                console.log(data);
                    $('#ret_login').hide(400);
                    setTimeout(() => {
                        $('#ret_login').show(400).html(data.msg);
                    }, 500);
                },
                error: function( data )
                {
                    $('#ret_login').removeClass('alert-success');
                    $('#ret_login').addClass('alert-danger');
                    $('#ret_login').html('');
                    if(!data.responseJSON){
                        console.log(data.responseText);
                        $('#ret_login').removeClass('invisible').html(data.responseText);
                    }else{
                        $('#ret_login').html('');
                        $.each(data.responseJSON.errors, function (key, value) {
                            //$('#ret_login').removeClass('invisible').append(key+': '+value+'<br>');
                            //console.log(key);
                            $('#ret_login').removeClass('invisible').append(value+'<br>');
                        });
                    }
                }
            });
        });
    });
</script>