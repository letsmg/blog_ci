<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Artigo extends CI_Model {

        public function lista_artigos(){            
            return $this->db->get('artigos')->result();
            //var_dump($posts);
        }

        
    }