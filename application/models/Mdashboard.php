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

    }
?>