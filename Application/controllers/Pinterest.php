<?php
class Pinterest extends CI_Controller {

	public function index(){
		$cookie = $this->input->cookie('logged');
		if(isset($cookie) || isset($_SESSION['successLogin'])){
			$this->Home();
		} else{
			$data['judul'] = 'Pinterest - Indonesia';
			$this->load->view('Landing/Login');
		}
	}

	public function Login() {
		$data['judul'] = 'Login | Login';
		$this->load->view('Landing/Login', $data);
	}

	public function SignUp() {
		$data['judul'] = 'Pinterest - Indonesia';;
		$this->load->view('Landing/SignUp',$data);
	}

	public function Home() {
		$cookie = $this->input->cookie('logged');
		$data['judul'] = "Pinterest";
		$this->load->view('Author/home', $data);
	}

	public function Profile(){
		$cookie = $this->input->cookie('logged');
		$data['judul'] = "Pinterest";
		$this->load->view('Author/author', $data);
	}
}
