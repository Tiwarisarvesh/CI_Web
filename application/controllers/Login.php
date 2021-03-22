<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

    public function authentication()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->form_validation->run())
                {
                    $username = $this->input->post('username');  
                    $password = $this->input->post('password');
                    
                   $this->load->model('loginmodel');
                   if($this->loginmodel->verify($username,$password))
                   {
                       $session_data = array(  
                        'username'     =>     $username   
                   );  
                   $this->session->set_userdata($session_data); 
                   redirect(base_url() . 'admin/');
                   }
                   else{
                       // not match password
                       //echo "not match password";
                       $this->session->set_flashdata('error', 'Invalid Username and Password');  
                       redirect(base_url() . 'login');  
                   }       
            }
                else
                { //retry Validation 
                   
                    $this->load->view('admin/login'); 
                 
                }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();   
           redirect(base_url() . 'login','refresh');
    }

    
        
}