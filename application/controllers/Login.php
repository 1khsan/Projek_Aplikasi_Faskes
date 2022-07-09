<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = [];
		$this->load->view('login',$data);
	}
	public function otentikasi(){
		$this->load->model('Login_model','user');
		$_username = $this->input->post('username');
		$_password = $this->input->post('password');
		$row = $this->user->login($_username,$_password);

		if(isset($row)){//jika user sudah terdaftar di database
			$this->session->set_userdata('ID',$row->id);
			$this->session->set_userdata('USERNAME',$row->username);
			$this->session->set_userdata('ROLE',$row->role);
			$this->session->set_userdata('USER',$row);
			if($this->session->userdata('ROLE')=='administrator')
				{
					redirect(base_url().'index.php/dashboard');
				}
			else if($this->session->userdata('ROLE')=='public'){
				redirect(base_url().'index.php/dashboard');
				}
			}
		else{
				redirect(base_url().'index.php/dashboard?status=false');
			}
}


public function logout(){
$logout= $this->session->unset_userdata('USERNAME');
$logout= $this->session->unset_userdata('ROLE');
$logout= $this->session->unset_userdata('USER');
redirect(base_url().'index.php/dashboard');
}

}