<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function conta_usuarios()
    {
        return $this->db->count('usuarios')->row();
    }


    public function cadastro(){
        $this->load->view('principal/cabecalho.php');
        $this->load->view('principal/menu_main.php');
        $this->load->view('usuarios/cadastro.php');
        $this->load->view('principal/rodape.php');
    }

    public function cadastra()
    {
        $this->load->model('m_usuario');
        $retorno = $this->m_usuario->cadastra();

        if ($retorno == 'email') {
            $msg = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
        }else{
            if ($retorno == 1) {
                $msg = "<div class='alert alert-success'>Cadastrado com sucesso</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Erro ao cadastrar, por favor tente novamente.</div>";
            }
        }
        
        $ret = [
            'msg' => $msg,
            'csrf' => $this->security->get_csrf_hash()
        ];

        echo json_encode($ret);
    }


}