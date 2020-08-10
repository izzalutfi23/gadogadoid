<?php 
    class Mhome extends CI_Model{
        
        public function get_banner($id){
            $this->db->where('id_banner', $id);
            return $this->db->get('banner');
        }

    }
?>