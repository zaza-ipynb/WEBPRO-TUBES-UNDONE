<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPinterest extends CI_Model {

    public function SignUp() {
        $data = array(
            "Email" => $this->input->post('Email'),
            "Password" => $this->input->post('Password')
        );

        if($this->isExist($data['Email'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login',
            array(
                "Email" => $data['Email'],
                "Password" => $data['Password']
            ));
            return true;
        }
    }

    public function isExist($Email) {
        $this->db->where("Email",$Email);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "Email" => $this->input->post('Email'),
            "Password" => $this->input->post('Password')
        );
        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }
}
