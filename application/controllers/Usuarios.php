<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


    public function cadastro(){
        $this->load->view('principal/cabecalho.php');
        $this->load->view('principal/menu_main.php');
        $this->load->view('usuarios/cadastro.php');
        $this->load->view('principal/rodape.php');        
    }

    public function cadastra()
    {
        $this->load->model('Usuario');
        $this->usuario->cadastra();
    }
    

}