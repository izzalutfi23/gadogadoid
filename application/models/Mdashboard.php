<?php 
    class Mdashboard extends CI_Model{
    
        public function get_banner($id=null){
            if($id!=null){
                $this->db->where('id_banner', $id);
            }
            return $this->db->get('banner');
        }

        public function edit_banner($data, $id){
            $this->db->update('banner', $data, array('id_banner'=>$id));
        }

        public function getgame($id=null){
            if($id!=null){
                $this->db->where('id_game', $id);
            }
            return $this->db->get('game');
        }

        public function insert_game($data){
            $this->db->insert('game', $data);
        }

        public function update_game($data, $id){
            $this->db->update('game', $data, array('id_game'=>$id));
        }

        public function deletegame($id){
            $this->db->where('id_game', $id);
            $this->db->delete('game');
        }

        public function getspek($id=null){
            if($id!=null){
                $this->db->where('spesifikasi.id_spek', $id);
            }
            $this->db->join('game', 'game.id_game=spesifikasi.id_game');
            return $this->db->get('spesifikasi');
        }

        public function insertspek($data){
            $param = array(
                'id_game' => $data['id_game'],
                'os_min' => $data['os_min'],
                'processor_min' => $data['processor_min'],
                'memori_min' => $data['memori_min'],
                'storage_min' => $data['storage_min'],
                'graphic_min' => $data['graphic_min'],
                'os_reco' => $data['os_reco'],
                'processor_reco' => $data['processor_reco'],
                'memori_reco' => $data['memori_reco'],
                'storage_reco' => $data['storage_reco'],
                'graphic_reco' => $data['graphic_reco']
            );
            $this->db->insert('spesifikasi', $param);
        }

        public function editspek($data, $id){
            $param = array(
                'id_game' => $data['id_game'],
                'os_min' => $data['os_min'],
                'processor_min' => $data['processor_min'],
                'memori_min' => $data['memori_min'],
                'storage_min' => $data['storage_min'],
                'graphic_min' => $data['graphic_min'],
                'os_reco' => $data['os_reco'],
                'processor_reco' => $data['processor_reco'],
                'memori_reco' => $data['memori_reco'],
                'storage_reco' => $data['storage_reco'],
                'graphic_reco' => $data['graphic_reco']
            );
            $this->db->update('spesifikasi', $param, array('id_spek'=>$id));
        }

        public function get_newgame($id=null){
            if($id!=null){
                $this->db->where('id_ngame', $id);
            }
            return $this->db->get('new_game');
        }

        public function edit_ngame($data, $id){
            $this->db->update('new_game', $data, array('id_ngame=>$id'));
        }

        public function get_user(){
            return $this->db->get('user');
        }

        public function insert_user($data){
            $param = array(
                'nama' => $data['nama'],
                'email' => $data['email'],
                'username' => $data['username'],
                'password' => md5($data['password']),
                'role' => 'admin'
            );
            $this->db->insert('user', $param);
        }

        public function del_user($id){
            $this->db->where('id_user', $id);
            $this->db->delete('user');
        }

        public function get_komen($id){
            $this->db->where('komentar.id_game', $id);
            $this->db->join('game', 'game.id_game=komentar.id_game');
            $this->db->join('user', 'user.id_user=komentar.id_user');
            return $this->db->get('komentar');
        }

        public function delkomen($id){
            $this->db->where('id_komen', $id);
            $this->db->delete('komentar');
        }

    }
?>