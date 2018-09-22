<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_artigo extends CI_Model {

        public function lista_artigos(){            
            return $this->db->get('artigos')->result();
            //var_dump($posts);
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
                'secao3' => $this->input->post('secao3')
            );
            
            return $this->db->insert('artigos', $dados);
            
        }
        
        
    }