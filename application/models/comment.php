<?php

class Comment extends CI_Model
{
    function get_comment($postID){
        $this->db->select()->from('comments')->where('postID',$postID)->order_by('date_added','desc');
        $query=$this->db->get();
        return $query->result_array();;
    }
    function insert_comment($data){
        $this->db->insert('comments',$data);
        return $this->db->insert_id();
    }
}
