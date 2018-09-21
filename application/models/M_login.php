<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Model {

        public function verifica_login(){
            $this->db->where('email',$this->input->post('email'));           
            $this->db->where('senha',password_hash($this->input->post('senha')),PASSWORD_DEFAULT);
            return $this->db->get()->result();
        }

        
    }