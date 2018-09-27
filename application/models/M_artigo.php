<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_artigo extends CI_Model {

        public function lista_artigos(){
            $this->db->select('art.*');
            $this->db->select('u.nome as usuario');
            $this->db->join('usuarios as u','u.id_usu = art.id_usu');
            return  $this->db->get('artigos as art')->result();            
        }

        public function cad_artigo()
        {
            $dados = array(
                'id_usu' => $this->session->userdata('codigo'),
                'titulo' => $this->input->post('titulo'),
                'subtitulo' => $this->input->post('subtitulo'),
                'secao' => $this->input->post('secao'),
                'subtitulo2' => $this->input->post('subtitulo2'),
                'secao2' => $this->input->post('secao2'),
                'subtitulo3' => $this->input->post('subtitulo3'),
                'secao3' => $this->input->post('secao3'),
                'dt_publicacao' => date('Y-m-d H:i:s')
            );

            return $this->db->insert('artigos', $dados);

        }

        public function edita()
        {
            
        }
        


    }