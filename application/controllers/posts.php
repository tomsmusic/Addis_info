<?php

class Posts extends CI_Controller
{
    function __Construct(){
        parent::__Construct();
        $this->load->model('post');
        $this->load->helper('url');
    }
    function index($start=0){
        
        $data['posts']=$this->post->get_posts(4,$start);
        if (empty($data['posts'])) {
            show_404();
        }
        $this->load->library('pagination');
        $config['base_url']=base_url().'posts/index/';
        $config['total_rows']=$this->post->get_posts_count();
        $config['per_page']=4;
        $this->pagination->initialize($config);
        $data['pages']=$this->pagination->create_links();
        
        $this->load->view('header');
        $this->load->view('post_index',$data);
        $this->load->view('footer');
    }
    function post($postID){
        $data['post']=$this->post->get_post($postID);
        if (empty($data['post'])) {
            show_404();
        }
        $this->load->view('header2');
        $this->load->view('post',$data);
    }
    function contact(){
        $this->load->view('header2');
        $this->load->view('contact');
        $this->load->view('footer');
    }
    function new_post(){
        $usertype = $this->session->userdata('user_type');
        if ($usertype!="admin" && $usertype!="author") {
            redirect(base_url().'users/login');
        }
        if($_POST){
            $data = array(
                'title'=>$_POST['title'],
                'post'=>$_POST['postt'],
                
                'active'=>1
            );
            var_dump($data);
            $this->form_validation->set_rules('');
            $this->post->insert_post($data);
           // header('location:posts/');
        }else{
            $this->load->view('header2');
            $this->load->view('new_post');
            $this->load->view('footer');
        }

    }
    function editpost($postID){
        $data['success']=0;
        $usertype = $this->session->userdata('user_type');
        if ($usertype!="admin" && $usertype!="author") {
            redirect(base_url().'users/login');
        }
        if ($_POST) {
            $data_post=array(
                'title'=>$_POST['title'],
                'post'=>$_POST['postt'],
                'active'=>1
            );
            $this->post->update_post($postID,$data_post);
            $data['success']=1;
        }
            $data['post']=$this->post->get_post($postID);
            $this->load->view('header2');
            $this->load->view('edit_post',$data);
            $this->load->view('footer');
            
    }
    function deletepost($postID){
        $usertype = $this->session->userdata('user_type');
        if ($usertype!="admin" && $usertype!="author") {
            redirect(base_url().'users/login');
        }
        $this->post->delete_post($postID);
        redirect(base_url().'posts');
    }
}