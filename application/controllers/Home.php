<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

        public function index(){

            $this->load->model('m_usuario');
            $usuarios = $this->m_usuario->conta_usuarios();
            
            $this->load->model('m_artigo');
            $artigos = $this->m_artigo->lista_artigos();

            $this->load->view('principal/cabecalho.php');
            $this->load->view('principal/menu_main.php');
            
            if($usuarios === null){ //se nao tem nenhum usuário no banco, pede para cadastrar
                $this->load->view('principal/primeiro_acesso.php');    
            }else{
                $this->load->view('principal/index.php',$artigos);    
            }            
            
            $this->load->view('principal/rodape.php');
        }

        public function lista()
        {
            
        }
        
    }