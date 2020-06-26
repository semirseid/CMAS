<?php
/**
 * Created by PhpStorm.
 * User: efpcme
 * Date: 2/1/2019
 * Time: 4:32 AM
 */


require_once (APPPATH.'core/Custom_Controller.php');
class Registration_C extends Custom_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthenticationModel');
        $this->load->library('session');
        $this->load->model('MemberRegistration_M');
    }
    public function Member_Registration()
    {
        if ($this->checklogedin()) {


            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('MemberRegistration');
            $this->load->view('footer');
        }
        else
            redirect(base_url('Authentication/login'));
    }
    function test(){
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('product_view');
        $this->load->view('footer');
    }

    function member_data(){
        $data=$this->MemberRegistration_M->member_list();
        echo json_encode($data);
    }

    function save_members_c(){
        $data=$this->MemberRegistration_M->save_members_m();
        echo json_encode($data);
    }

    function update_member_c(){
        $data=$this->MemberRegistration_M->update_member_m();
        echo json_encode($data);

    }

    function delete_member_c(){
        $data=$this->MemberRegistration_M->delete_members_m();
        echo json_encode($data);
    }



}