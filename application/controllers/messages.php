<?php

class messages extends CI_Controller
{
    function __Construct(){
        parent::__Construct();
        $this->load->model('message');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    
    function message(){
        $data['message']=$this->message->get_message();
        if (empty($data['message'])) {
            show_404();
        }
        
        

        $this->load->view('header');
        $this->load->view('messages',$data);
      
        $this->load->view('footer');

    }

    function contact(){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }
    
    function new_message(){
        

        if($_POST){

                $data = array(
                    'name'=>$_POST['name'],
                    'email'=>$_POST['email'], 
                    'phone'=>$_POST['phone'], 
                    'message'=>$_POST['message'] 
                );
                //var_dump($data);
                $this->form_validation->set_rules('');
                $this->message->insert_message($data);

                redirect(base_url());
        }
    
            $this->load->view('header');
            $this->load->view('contact');
            $this->load->view('footer');
        

    }
    
    function delete_messages($postID){
        $usertype = $this->session->userdata('user_type');
        if ($usertype!="admin" && $usertype!="author") {
            redirect(base_url().'users/login');
        }
        $this->message->delete_mess($postID);
        redirect(base_url().'posts');
    }
}