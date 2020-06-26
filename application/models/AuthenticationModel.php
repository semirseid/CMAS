<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthenticationModel extends CI_Model
{
	
	function __construct()
	{
		// Call the CI_Model constructor
		 parent::__construct();
		 $this->load->library('session');
	}


        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }
        public function login ($username,$password)
            {
        $this->db->where("user_name",$username);
        $this->db->where("user_password",$password);
        $query=$this->db->get("tbl_users");
                if ($query->num_rows()>0)
                {
                 foreach($query->result() as $rows)
                   {
                       $newdata=array('username' => $rows->user_name,
                           'logged_in' => TRUE,
                       );
//                       $this->session->set_userdata('username', $rows->user_name);
                   }

                 $this->session->set_userdata($newdata);
                 return true;
                }
                return false;
            }
}
?>