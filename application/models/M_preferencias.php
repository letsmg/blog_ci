<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_preferencias extends CI_Model {

        public function busca_nome(){
            return $this->db->get('preferencias')->row();
        }

        public function adiciona_nome_blog()
        {
            $dados = array(
               'nome_blog' => $this->input->post('nome_blog')
            );

            return $this->db->insert('preferencias', $dados);
        }



    }