<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {

        public function index(){
            $this->load->view('principal/cabecalho.php');
            $this->load->view('admin/menu_admin');
            $this->load->view('admin/gerencia.php');
            $this->load->view('principal/rodape.php');
        }

        
    }