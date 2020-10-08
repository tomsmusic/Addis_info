<?php

class Post extends CI_Model
{
    function get_posts($num=20,$start=0){
       // $sql = "SELECT * FROM posts WHERE activ=1 ORDER BY date_added DESE LIMIT 0,20;";
       $this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
       $query=$this->db->get();
       return $query->result_array();
    }
    function get_posts_count(){
        $this->db->select('postID')->from('posts')->where('active',1);
        $query = $this->db->get();
        return $query->num_rows();

    }
    function get_post($postID){
        $this->db->select()->from('posts')->where(array('active'=>1,'postID'=>$postID))->order_by('date_added','desc');
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function get_search_result($search_term ='default'){

        $this->db->select('*');
        $this->db->from('posts');
        $this->db->like('title',$search_term);

         
         $query = $this->db->get();

         
         return $query->result_array();
    }
    
    function insert_post($data){
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    function update_post($postID,$data){
        $this->db->where('postID',$postID);
        $this->db->update('posts',$data);

    }
    function delete_post($postID){
        $this->db->where('postID',$postID);
        $this->db->delete('posts');
    }
}
