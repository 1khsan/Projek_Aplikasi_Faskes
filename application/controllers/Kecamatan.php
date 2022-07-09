<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function index()
	{
		$this->load->model('kecamatan_model');
		$datalist = $this->kecamatan_model->getAll();
		$data['datalist'] = $datalist;
		$data['judul'] = 'KELOLA Kecamatan';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kecamatan/index', $data);
		$this->load->view('layout/footer');
	}
	public function create (){
        $data['judul'] = 'Kelola Data Kecamatan FASKES';
		$this->load->model('kecamatan_model');
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kecamatan/create', $data);
		$this->load->view('layout/footer');
	}
    
	public function view(){
	$_id = $this->input->get('id');  
	$this->load->model( 'kecamatan_model');
	$data['kecamatan'] = $this->kecamatan_model->findById($_id);
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('kecamatan/view',$data);
	$this->load->view('layout/footer');
	}
	
	
	
    public function save ()
	{
		$this->load->model( 'kecamatan_model');
		$_id = $this->input->post('id');
		$_nama = $this->input->post('nama'); 
		$_id_edit = $this->input->post('idedit');//hidden
		
		// $_id = $this->jenis_faskes->id;//?=1
		// $data['id'] = $_id;//?=1
		$data[] = $_id;
        $data['nama'] = $_nama;//?=2
		
		if(isset($_id_edit)){
			//update data lama
			$data[] = $_id_edit;//?=3
			$this->kecamatan_model->update($data);
			redirect(base_url().'index.php/kecamatan', 'refresh');
		}else{
			//save data baru
			$this->kecamatan_model->save($data['nama']);
			$_id = $this->kecamatan_model->id;
			redirect(base_url().'index.php/kecamatan', 'refresh');
		}
		
		
	}
	
	public function edit()
	{
		$this->load->model( 'kecamatan_model');
		$_id = $this->input->get('id');
		$kecamatan_edit = $this->kecamatan_model->findById($_id);
		$data['judul'] = 'Form Update Kecamatan FASKES';
		$data['kecamatan'] = $kecamatan_edit;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kecamatan/update', $data);
		$this->load->view('layout/footer');
		
	}

	public function delete(){
		$_id = $this->input->get('id');
        $this->load->model( 'kecamatan_model');
        $this->kecamatan_model->delete($_id);
        redirect(base_url().'index.php/kecamatan', 'refresh');   
	}

	
	
	
	
}