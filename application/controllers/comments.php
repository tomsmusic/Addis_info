<?php
class Comments extends CI_Controller
{   
    function __Construct(){
        parent::__Construct();
        $this->load->model('comment');
        $this->load->helper('url');
    }
    function new_comment(){
        
        if($_POST){
            $id = $_GET['id'];
            $data = array(
                'comment_text'=>$_POST['comment_text'],
                'postID'=>$id,
                'commenter'=>$_POST['commenter']
                
                
            );
            var_dump($data);
            
            $this->form_validation->set_rules('');
            $this->comment->insert_comment($data);
            redirect(base_url().'posts/post/'.$id);
        }else{
            redirect(base_url().'posts');
        }

    }
}