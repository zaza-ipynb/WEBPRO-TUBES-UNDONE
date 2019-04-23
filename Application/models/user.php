<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function SignUp() {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            "Email" => $this->input->post('Email'),
            "Pass" => md5($this->input->post('Pass')),
            "RegisTime" => Date("d-m-Y, H:i:s")
        );

        if($this->isExist($data['Username'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login',
            array(
                "Username" => $data['Username'],
                "Pass" => $data['Pass']
            ));
            return true;
        }
    }

    public function isExist($username) {
        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }
}