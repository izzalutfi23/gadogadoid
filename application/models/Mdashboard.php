<?php 
    class Mdashboard extends CI_Model{
        
        public function getgame($id=null){
            if($id!=null){
                $this->db->where('id_game', $id);
            }
            return $this->db->get('game');
        }

    }
?>