<?php
class user extends CI_Model
{
      
    
    function login($username,$password,$type){
        $where=array(
            'username'=>$username,
            'password'=>sha1($password),
            'user_type'=>$type
        );
        $this->db->select()->from('users')->where($where);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function insert_user($data){
        $this->db->insert('users',$data);
        return $this->db->insert_id();
    }
    
}
