<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

        public function index(){

            $this->load->model('m_usuario');
            $usuarios = $this->m_usuario->conta_usuarios();

            $this->load->model('m_artigo');
            $dados['artigos'] = $this->m_artigo->lista_artigos();

            $this->load->view('principal/cabecalho.php');

            if(empty($usuarios)){ //se nao tem nenhum usuário no banco, pede para cadastrar
                $this->load->view('principal/primeiro_acesso.php');
            }else{
                $this->load->model('m_preferencias');
                $dados['nome'] = $this->m_preferencias->busca_nome();
                //if (isset($nome)) {
                    $this->load->view('principal/menu_main.php');
                    $this->load->view('principal/index.php',$dados);
                /*} else {
                    $this->load->view('principal/menu_main.php');
                    $this->load->view('principal/index.php',$artigos);
                }*/
            }

            $this->load->view('principal/rodape.php');
        }

        public function lista()
        {

        }

    }