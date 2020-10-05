<?php
class users extends CI_Controller
{
    function __Construct(){
        parent::__Construct();
        $this->load->model('user');
       // $this->load->helper('url');
    }
    function login(){
        $data['error'] = 0;
        if($_POST){
            
            $username=$this->input->post('username',true);
            $password=$this->input->post('password',true);
            $type=$this->input->post('user_type',true);
            
            $user=$this->user->login($username,$password,$type);
            if (!$user ) {
                $data['error']=1;
            }else {
                $this->session->set_userdata('id',$user['id']);
                $this->session->set_userdata('user_type',$user['user_type']);
                redirect(base_url().'posts');
            }
        }
        
        $this->load->view('header');
        $this->load->view('login',$data);
        $this->load->view('footer');
    }
    function register(){
        $usertype = $this->session->userdata('user_type');
        if ($usertype!="admin") {
            redirect(base_url().'users/login');
        }
        $data['errors'] = [];
       
        if ($_POST) {
            
            $config=array(
                array(
                    'field'=>'username',
                    'lable'=>'Username',
                    'rules'=>'trim|required|min_length[3]|is_unique[users.username]'
                ),
                array(
                    'field'=>'password',
                    'lable'=>'Password',
                    'rules'=>'trim|required|min_length[4]'
                ),
                array(
                    'field'=>'password2',
                    'lable'=>'Password Confirmed',
                    'rules'=>'trim|required|min_length[4]|matches[password]'
                ),
                array(
                    'field'=>'email',
                    'lable'=>'Email',
                    'rules'=>'trim|required|is_unique[users.email]|valid_email'
                ),
                array(
                    'field'=>'user_type',
                    'lable'=>'User Type',
                    'rules'=>'required'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run()==FALSE) {
                $data['errors'] = validation_errors();
                
            }else {
                
             
            $data = array(
                'username'=>$_POST['username'],
                'email'=> $_POST['email'],
                'password'=> sha1($_POST['password']),
                'user_type'=> $_POST['user_type']
            );
            var_dump($data);
           // $this->load->model('user');
              $this->user->insert_user($data);
              
             // $this->session->set_userdata('id',$userid);
             // $this->session->set_userdata('user_type',$_POST['user_type']);
              redirect(base_url().'posts');
        }}
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('register_user',$data);
        $this->load->view('footer');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'posts');
    }
}