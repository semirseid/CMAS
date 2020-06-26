<?php
/**
*  
*/
class Custom_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

	function load_pack_library()
	{
	return	$this->load->view('custom_library');

	}

    function checklogedin()
    {
        if(!empty($this->session->userdata('username')))
        {
            return true;

        }else
            return false;
    }

}
?>