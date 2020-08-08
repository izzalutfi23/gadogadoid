<?php
    class Mlogin extends CI_Model{

        public function cek_login($user, $pass){
            return $this->db->get_where('user', array('username'=>$user, 'password'=>$pass));
        }

        public function proses_regis($data){
            $param = array(
                'nama' => $data['nama'],
                'email' => $data['email'],
                'username' => $data['username'],
                'password' => md5($data['password'])
            );

            $this->db->insert('user', $param);
        }

    }
?>