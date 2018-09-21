<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function index(){
            $this->load->view('principal/cabecalho.php');
            $this->load->view('principal/menu_main');
            $this->load->view('login/loga.php');
            $this->load->view('principal/rodape.php');
        }

        public function verifica()
        {
            $this->load->model('m_login');
            $analisa = $this->m_login->verifica_login();

            if($analisa == true){
                
            }else{

            }
        }
        
    }