<?php
    class Mlogin extends CI_Model{

        public function cek_login($user, $pass){
            return $this->db->get_where('user', array('username'=>$user, 'password'=>$pass));
        }

    }
?>