<?php 
    class Mdashboard extends CI_Model{
        
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

    }
?>