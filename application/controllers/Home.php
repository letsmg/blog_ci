<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

        public function index(){
            $this->load->model('artigo');
            $artigos = $this->artigo->lista_artigos();

            $this->load->view('principal/cabecalho.php');
            $this->load->view('principal/menu_main.php');
            $this->load->view('principal/index.php',$artigos);
            $this->load->view('principal/rodape.php');
        }

        public function lista()
        {
            
        }
        
    }