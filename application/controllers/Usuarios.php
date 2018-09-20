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

        if ($retorno == 1) {
            $ret = array([
                'msg' => "cadastrado com sucesso"
            ]);
        } else {
            $ret = array([
                'msg' => "Erro ao cadastrar",
                'csrf' => $this->security->get_csrf_hash()
            ]);
        }
        
    }
    

}