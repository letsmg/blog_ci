<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_usuario extends CI_Model {

        public function conta_usuarios()
        {
            return $this->db->count_all_results('usuarios');
        }


        public function cadastra(){

            $email = $this->input->post('email');
            
            $this->db->where('email',$this->input->post('email'));
            $ja_cadastrado = $this->db->count_all_results('usuarios');
            
            if ($ja_cadastrado) {
                return "email";
            }            

            $dados = array(
               'nome' => $this->input->post('nome'),
               'email' => $this->input->post('email'),
               'senha' => password_hash($this->input->post('senha'),PASSWORD_DEFAULT),
               'nivel' => 1,
            );
            
            if($this->db->insert('usuarios', $dados)){
                return 1;
            }else{
                return 2;
            }
        }


    }