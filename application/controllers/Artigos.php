<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Artigos extends CI_Controller {

        public function index(){
            $this->load->view('principal/cabecalho.php');
            $this->load->view('principal/menu_admin');
            $this->load->view('artigos/cadastro.php');
            $this->load->view('principal/rodape.php');
        }

        public function novo()
        {
            $this->load->view('principal/cabecalho.php');
            $this->load->view('admin/menu_admin');
            $this->load->view('artigos/cadastro.php');
            $this->load->view('principal/rodape.php');
        }
                
    }