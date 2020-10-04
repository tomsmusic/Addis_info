<?php

class Replay extends CI_Model
{
    function get_replay($commentID){
        $this->db->select()->from('replays')->where('comment_id',$commentID);
        $query=$this->db->get();
        return $query->result_array();;
    }
}
