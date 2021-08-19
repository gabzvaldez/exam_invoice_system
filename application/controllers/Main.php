<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('main_model');
            // Your own constructor code
    }

	public function index()
	{
		// if($this->session->userdata('is_logged_in') != 1 && $this->session->userdata('role') != "staff"){
			$this->load->view('templates/login_header');
			$this->load->view('login');
			$this->load->view('templates/login_footer');
		// }else{
			// redirect(base_url()."".$this->session->userdata('role'));
		// }
	}

	public function login()
	{
			$this->load->view('templates/login_header');
			$this->load->view('login');
			$this->load->view('templates/login_footer');
	}
	public function verify_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$result = $this->main_model->verify_login($username);
		// var_dump($result);
		if($result != null){
			if (password_verify($this->input->post('password'), $result->password)) {
			    $newdata = array(
				        'username'  => $result->username,
				        'id'  	=> $result->id,
				        // 'dept'  	=> $result->dept,
				        'role'  => $result->role,
				        // 'status'  => $result->status,
				        'is_logged_in' => 1
				);

				$this->session->set_userdata($newdata);
				if($this->session->userdata('role') == "admin"){
					echo "<script>
					alert('Successful Login!');
					window.location.href='".base_url()."admin';
					</script>";
				}else if($this->session->userdata('role') == "staff"){
					echo "<script>
					alert('Successful Login!');
					window.location.href='".base_url()."staff';
					</script>";
				}
				// var_dump($this->session->userdata());

			} else {
			    echo "<script>
					alert('Invalid Username/Password!');
					window.location.href='".base_url()."main/login';
					</script>";
			}


		}else{
			echo "<script>
					alert('Invalid Username/Password!');
					window.location.href='".base_url()."main/login';
					</script>";
		}

	}

	public function logout()
	{
		session_destroy();
			echo "<script>
				window.location.href='".base_url()."main';
				</script>";
	}
}
