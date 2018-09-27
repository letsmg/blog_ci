<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Artigos extends CI_Controller {

        public function __construct(){
            parent::__construct();

            if(!$this->session->userdata('codigo')){
                redirect(base_url());
            }
        }


        public function index(){
            $this->load->model('m_artigo');
            $arts['artigos'] = $this->m_artigo->lista_artigos();
            
            $this->load->view('principal/cabecalho.php');
            $this->load->view('admin/menu_admin');
            $this->load->view('artigos/lista_artigos.php',$arts);
            $this->load->view('principal/rodape.php');
        }

        public function novo()
        {
            $this->load->view('principal/cabecalho.php');
            $this->load->view('admin/menu_admin');
            $this->load->view('artigos/cad_artigo.php');
            $this->load->view('principal/rodape.php');
        }

        public function cadastra()
        {
            $this->load->model('m_artigo');
            $retorno = $this->m_artigo->cad_artigo();

            if($retorno == 1){
                $msg = "<div class='alert alert-success'>Artigo salvo com sucesso.</div>";
            }else if ($retorno == 2) {
                $msg = "<div class='alert alert-danger'>Artigo com esse título já salvo</div>";
            }else{
                $msg = "<div class='alert alert-danger'>Erro ao salvar artigo</div>";
            }
            $ret = ['csrf' => $this->security->get_csrf_hash(),
                    'msg' => $msg   ];
            echo json_encode($ret);            
        }

        public function edicao()
        {
            $this->load->model('m_artigo');
            $editado = $this->m_artigo->edita();

            if ($editado) {
                # code...
            } else {
                # code...
            }
            
        }
        
        
                
    }