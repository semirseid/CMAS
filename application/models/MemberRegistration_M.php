<?php
/**
 * Created by PhpStorm.
 * User: efpcme
 * Date: 1/30/2019
 * Time: 3:26 PM
 */

class MemberRegistration_M extends CI_Model
{
    function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
    function member_list(){
        $hasil=$this->db->get('member_registration_tbl');
        return $hasil->result();
    }

    function save_members_m(){

        $data = array(
            'member_id' 	=> $this->input->post('member_id'),
            'title' 	=> $this->input->post('title'),
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' 	=> $this->input->post('last_name'),
            'age' 	=> $this->input->post('age'),
            'gender' 	=> $this->input->post('gender'),
            'department' => $this->input->post('department'),
            'salary' 	=> $this->input->post('salary'),
            'registration_date' 	=> $this->input->post('datepicker1'),
                );
        $result=$this->db->insert('member_registration_tbl',$data);
        return $result;
    }

    function update_member_m(){

        $memberid_update=$this->input->post('memberid_update');
        $title_update=$this->input->post('title_update');
        $firstname_update=$this->input->post('firstname_update');
         $middlename_updatee=$this->input->post('middlename_update');
        $lastname_update=$this->input->post('lastname_update');
        $age_update=$this->input->post('age_update');
        $gendre_updte=$this->input->post('gendre_updte');
        $department_update=$this->input->post('department_update');
        $salary_update=$this->input->post('salary_update');
         $regestration_update=$this->input->post('regestration_update');

//        $this->db->set('$memberid_update', $memberid_update);
        $this->db->set('title', $title_update);
        $this->db->set('first_name', $firstname_update);
        $this->db->set('last_name', $middlename_updatee);
        $this->db->set('middle_name', $lastname_update);
        $this->db->set('age', $age_update);
        $this->db->set('gender', $gendre_updte);
        $this->db->set('department', $department_update);
        $this->db->set('salary', $salary_update);
        $this->db->set('registration_date', $regestration_update);
        $this->db->where('member_id', $memberid_update);
        $result=$this->db->update('member_registration_tbl');
        return $result;
    }

    function delete_members_m(){
        $member_id=$this->input->post('member_id');
        $this->db->where('member_id', $member_id);
        $result=$this->db->delete('member_registration_tbl');
        return $result;
    }


}