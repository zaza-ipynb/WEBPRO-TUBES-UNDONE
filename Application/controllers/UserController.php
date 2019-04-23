<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function SignUp()
	{
        if($_POST['Pass'] != null){
            if($this->User->SignUp()) {
                $this->session->set_flashdata('SuccessReg','Success');
                redirect('Login');
            } else {
                $this->session->set_flashdata('FailReg', 'Fail');
                redirect('SignUp');
            }
        } else {
            $this->session->set_flashdata('FailReg', 'Fail');
            redirect('SignUp');
        }
    }

    public function Login() {
       
        if($user != null){
            if($this->input->post('remember-me') != null) {
                set_cookie('logged', $user[0]['Username'], '3600');
                redirect('Login');
            } else {
                $this->session->set_userdata('successLogin', $user[0]['Username']);
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('falselogin','nodata');
            redirect('Login');
        }
    }
}