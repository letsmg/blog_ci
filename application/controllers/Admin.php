<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {

        public function __construct(){
            parent::__construct();

            if(!$this->session->userdata('codigo')){
                redirect(base_url());
            }
        }

        public function index(){
            $this->load->view('principal/cabecalho.php');
            $this->load->view('admin/menu_admin');
            $this->load->view('admin/gerencia.php');
            $this->load->view('principal/rodape.php');
        }

        
        
        
    }