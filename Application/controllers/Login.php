<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $this->loginPage();
        } else {
            $data['title'] = "Log In";
            $this->load->view('Login', $data);
        }
    }
    
    public function SignUp() {
        $data['title'] = "Sign Up";
        $this->load->view('SignUp');
    }

    public function loginPage() {
        $cookie = $this->input->cookie('logged');
        $data['image'] = $this->User->getImage();
        $this->load->view('loggedin', $data);
    }
}