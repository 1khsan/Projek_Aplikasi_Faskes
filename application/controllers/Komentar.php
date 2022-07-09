<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function index()
	{
		$this->load->model('komentar_model');
		$komentar = $this->komentar_model->getAll();
        $data['judul'] = "Kelola Komentar";
		$data['datalist'] = $komentar;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('komentar/index', $data);
		$this->load->view('layout/footer');
	}
	
    public function create (){
        $data['judul'] = 'Kelola Komentar';
		$this->load->model('users_model');
		$data['users']=$this->users_model->getAll();
		$this->load->model('faskes_model');
		$data['faskes']=$this->faskes_model->getAll();
		$this->load->model('nilai_rating_model');
		$data['nilai_rating']=$this->nilai_rating_model->getAll();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('komentar/create', $data);
		$this->load->view('layout/footer');
	}
    
	public function view(){
	$_id = $this->input->get('id');  
	$this->load->model( 'komentar_model');
	$this->load->model('users_model');
	$data['komentar'] = $this->komentar_model->findById($_id);
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('komentar/view',$data);
	$this->load->view('layout/footer');
	}
	
	
	
    public function save ()
	{
		$this->load->model('komentar_model');
		$_id = $this->input->post('id');
		
		$_komentar = $this->input->post('komentar'); 
		$_user_id = $this->input->post('users_id'); //hidden
		$_faskes_id = $this->input->post('faskes_id'); //hidden
		$_nilai_rating_id = $this->input->post('nilai_rating_id'); 
		$_id_edit = $this->input->post('idedit');//hidden
		
		
		// $data['id'] = $_id;//?1
        
        $data['komentar'] = $_komentar;//?=3
        $data['users_id'] = $this->session->userdata('ID');//?=4
        $data['faskes_id'] = $_faskes_id;//?=5
        $data['nilai_rating_id'] = $_nilai_rating_id;//?=6
		// die(print_r($data));
		// die(print_r($data));
	
		if(isset($_id_edit)){
			//update data lama
			$data[] = $_id_edit;//?=7
			$this->komentar_model->update($data);
			redirect(base_url().'index.php/dashboard', 'refresh');
		}else{
			// die(print_r($data));
			//save data baru
			
			// echo $data[] = $_komentar;
			// echo"<p>ini id</p>" .  $data['id'] ;//?1
			// echo"<p>ini komentar</p>" .  $data['komentar'] ;//?1
			// echo"<p>ini users_id</p>" .  $data['users_id'] ;//?1
			// echo"<p>ini faskes_id</p>" .  $data['faskes_id'] ;//?1
			// echo"<p>ini nilai_rating_id</p>" .  $data['nilai_rating_id'] ;//?1
        
       		// echo $data[] = $_komentar;//?=3
        	// echo $data[] = $_user_id;//?=4
        	// echo $data[] = $_faskes_id;//?=5
        	// echo $data[] = $_nilai_rating_id;
			
			// die(print_r($data));
			$this->komentar_model->save($data);
			// die(print_r($data));
			$_id = $this->komentar_model->id;
			if($this->session->userdata('ROLE')=='administrator'){
			redirect(base_url().'index.php/komentar', 'refresh');
			}else{
				redirect(base_url().'index.php/dashboard', 'refresh');
			}
			}
		
		
	}
	
	
	public function edit()
	{
		$this->load->model( 'komentar_model');
		$_id = $this->input->get('id');
		$this->load->model('users_model');
		$data['users']=$this->users_model->getAll();
		$this->load->model('faskes_model');
		$data['faskes']=$this->faskes_model->getAll();	
		$this->load->model('nilai_rating_model');
		$data['nilai_rating']=$this->nilai_rating_model->getAll();
		$komentar_edit= $this->komentar_model->findById($_id);
		$data['judul'] = 'Form Update komentar';
		$data['komentar'] = $komentar_edit;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('komentar/update', $data);
		$this->load->view('layout/footer');
		
	}

	public function delete(){
		$_id = $this->input->get('id');
        $this->load->model( 'komentar_model');
        $this->komentar_model->delete($_id);
        redirect(base_url().'index.php/komentar', 'refresh');   
	}

	

}