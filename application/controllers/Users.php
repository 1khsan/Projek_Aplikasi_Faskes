<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->model('users_model');
		$datalist = $this->users_model->getAll();
		$data['datalist'] = $datalist;
		$data['judul'] = 'KELOLA USer';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('users/index', $data);
		$this->load->view('layout/footer');
	}
	public function create (){
        $data['judul'] = 'Kelola Data user';
		$this->load->model('users_model');
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('users/create', $data);
		$this->load->view('layout/footer');
	}
    
	public function view(){
	$_id = $this->input->get('id');  
	$this->load->model( 'users_model');
	$data['users'] = $this->users_model->findById($_id);
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('users/view',$data);
	$this->load->view('layout/footer');
	}
	
	
	
    public function save ()
	{
		$this->load->model( 'users_model');
		$_nama = $this->input->post('username');
		$_email = $this->input->post('email'); 
		$_password = $this->input->post('password'); 
		$_id_edit = $this->input->post('idedit');//hidden
		
		// $_id = $this->jenis_faskes->id;//?=1
		// $data['id'] = $_id;//?=1
		
        $data['nama'] = $_nama;//?=2
        $data['password'] = $_password;//?=2
		$data['email'] = $_email;
		if(isset($_id_edit)){
			//update data lama
			$data[] = $_id_edit;//?=3
			$this->users_model->update($data);
			redirect(base_url().'index.php/users', 'refresh');
		}else{
			//save data baru
			$this->users_model->save($data);
			// die(print_r($this->users_model->save($data)));
			$_id = $this->user_model->id;
			redirect(base_url().'index.php/dashboard', 'refresh');
		}
		
		
	}
	
	public function edit()
	{
		$this->load->model( 'users_model');
		$_id = $this->input->get('id');
		$user_edit = $this->users_model->findById($_id);
		$data['judul'] = 'Form Update user';
		$data['users'] = $user_edit;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('users/update', $data);
		$this->load->view('layout/footer');
		
	}

	public function delete(){
		$_id = $this->input->get('id');
        $this->load->model( 'users_model');
        $this->users_model->delete($_id);
        redirect(base_url().'index.php/users', 'refresh');   
	}

	
	
	
	
}