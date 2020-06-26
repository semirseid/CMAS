<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH.'core/Custom_Controller.php');
class Authentication extends Custom_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthenticationModel');
        $this->load->library('session');

    }

    public function index()
	{

	    if ($this->checklogedin()){
	        redirect(base_url('Authentication/HomeDashboard'));
        }
            else{
                redirect(base_url('Authentication/login'));
            }

	}
	function login()
    {
        if ($this->checklogedin())
            redirect(base_url('Authentication/HomeDashboard'));
        else

        $this->load->Library('form_validation');
        $this->form_validation->set_rules('username','user name','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','password','trim|required|min_length[4]|max_length[25]');
       if($this->form_validation->run()==FALSE)
        {
          $this->load->view('login') ;
        }
       else
       {
           $username=$this->input->post('username');
           $password=$this->input->post('password');
           $result=$this->AuthenticationModel->login($username,$password);
           if($result)
           {
//            $this->HomeDashboard();
               redirect(base_url("Authentication/HomeDashboard"));
           }
           else
           {
               echo "<script> alert('error  login');</script>";
               $this->load->view('login');

           }
       }
    }

    public function HomeDashboard()
    {
        if ($this->checklogedin()) {


            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('dashboard');
            $this->load->view('footer');
        }
        else
            redirect(base_url('Authentication/login'));
    }
    function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url());
    }

}
?>