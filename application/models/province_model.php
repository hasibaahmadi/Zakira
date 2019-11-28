<?php
class province_model extends CI_model{
    function __construct(){
		parent::__construct();
     
         $this->load->database();
    }
        public function get_province(){
          return  $this->db->get('province')->result();
        }
        /*
    }
    public function get_room($limit,$offset){

    return $this->db->get('room',$limit,$offset)->result();
}
*/
public function save_province ($data){
    return $this->db->insert('province',$data);
}

public function deleteprovince($province_id	){
    $this->db->where('province_id',$province_id	);
    return $this->db->delete('province');
}

public function getsingleprovince($province_id){
    $this->db->where('province_id',$province_id);
    return $this->db->get('province')->row();
}



public function update_province($data,$province_id){
    $this->db->where('province_id',$province_id);
    $this->db->update('province',$data);
}


}




