<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_usuario extends CI_Model {

        public function conta_usuarios()
        {
            $this->db->count_all('usuarios');
        }


        public function cadastra(){

            $dados = array(
               'nome' => $this->input->post('nome'),
               'email' => $this->input->post('email'),
               'senha' => $this->input->post('senha')
            );

            return $this->db->insert('usuarios', $dados);
        }


    }