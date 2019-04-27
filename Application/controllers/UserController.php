<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function SignUp()
	{
		if($_POST['Password'] != null){
			if($this->UserPinterest->SignUp()) {
        		redirect('Pinterest/Login');
      		} else {
        		redirect('Pinterest/SignUp');
      		}
    	} else {
      		redirect('Pinterest/SignUp');
    	}
	}

  public function Login() {

    $user = $this->UserPinterest->findUser();
      if($user != null){
		set_cookie('logged', $user[0]['Email'], '3600');
        redirect('Pinterest/Home');
      } else {
        redirect('Pinterest/Home');
      }
	}

	public function Logout() {
		$cookie = $this->input->cookie('logged');
		if(isset($cookie)) {
				delete_cookie('logged');
				redirect('Pinterest');
		} else {
				session_destroy();
				redirect('Pinterest');
		}
	}

}
