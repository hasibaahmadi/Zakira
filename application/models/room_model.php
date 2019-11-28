<?php
class room_model extends CI_model{
    function __construct(){
		parent::__construct();
     
         $this->load->database();
    }
        public function get_room(){
          return  $this->db->get('room')->result();
        }
        /*
    }
    public function get_room($limit,$offset){

    return $this->db->get('room',$limit,$offset)->result();
}
*/
public function save_room ($data){
    return $this->db->insert('room',$data);
}

public function deleteroom($room_no	){
    $this->db->where('room_no',$room_no);
    return $this->db->delete('room');
}

public function getsingleroom($room_no	){
    $this->db->where('room_no',$room_no);
    return $this->db->get('room')->row();
}



public function update_room($data,$room_no){
    $this->db->where('room_no',$room_no);
    $this->db->update('room',$data);
}


}




