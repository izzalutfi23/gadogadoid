<?php 
    class Mhome extends CI_Model{
        
        public function get_banner($id){
            $this->db->where('id_banner', $id);
            return $this->db->get('banner');
        }

        public function get_game($id=null){
            if($id!=null){
                $this->db->join('spesifikasi', 'spesifikasi.id_game=game.id_game');
                $this->db->where('game.id_game', $id);
            }
            $this->db->limit(8, 0);
            return $this->db->get('game');
        }

        public function get_gamelainnya($par){
            return $this->db->get('game', $par['perpage'], $par['start']);
        }

        public function get_review(){
            $this->db->limit(4, 0);
            $this->db->order_by('id_game', 'desc');
            return $this->db->get('game');
        }

        public function get_newgame(){
            $this->db->where('id_ngame', 1);
            return $this->db->get('new_game');
        }

        public function get_user($user){
            $this->db->where('username', $user);
            return $this->db->get('user');
        }

        public function get_komentar($id){
            $this->db->join('user', 'user.id_user=komentar.id_user');
            $this->db->join('game', 'game.id_game=komentar.id_game');
            $this->db->where('komentar.id_game', $id);
            return $this->db->get('komentar');
        }

        public function insertkomen($data){
            $this->db->insert('komentar', $data);
        }

    }
?>