<?php
class message extends CI_Model
{
      
    
    function get_message($num=5,$start=0){
        
        $this->db->select()->from('messages')->order_by('date_added','desc')->limit($num,$start);
        $query=$this->db->get();
        return $query->result_array();
    }
    function insert_message($data){
        $this->db->insert('messages',$data);
        return $this->db->insert_id();
    }
    
}
