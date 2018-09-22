<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_login extends CI_Model {

        public function verifica_login(){
            $this->db->where('email',$this->input->post('email'));
            $dados = $this->db->get('usuarios')->row();

            if (!empty($dados->senha)){
                if(password_verify($this->input->post('senha'),$dados->senha)){
                    $info = ['codigo'=> $dados->id_usu];
                    $this->session->set_userdata($info);
                    return true;
                }else{
                    return false;
                }
            } else {
                return false;
            }
        }





    }