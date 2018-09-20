<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_usuario extends CI_Model {

        public function conta_usuarios()
        {
            $this->db->count_all('usuarios');
        }
        

        public function lista(){
            
            
        }

        
    }