<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiRating extends CI_Controller {

	public function index()
	{
		$this->load->model('nilai_rating_model');
		$rating = $this->nilai_rating_model->getAll();
        $data['judul'] = "Kelola Nilai Rating";
		$data['datalist'] = $rating;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('nilai_rating/index', $data);
		$this->load->view('layout/footer');
	}
	
    public function create (){
        $data['judul'] = 'Kelola Nilai Rating';
		$this->load->model('nilai_rating_model');
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('nilai_rating/create', $data);
		$this->load->view('layout/footer');
	}
    
	public function view(){
	$_id = $this->input->get('id');  
	$this->load->model( 'nilai_rating_model');
	$data['rating'] = $this->nilai_rating_model->findById($_id);
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('nilai_rating/view',$data);
	$this->load->view('layout/footer');
	}
	
	
	
    public function save ()
	{
		$this->load->model('nilai_rating_model');
		$_id = $this->input->post('id');
		$_nama = $this->input->post('nama_faskes'); 
		$_id_edit = $this->input->post('idedit');//hidden
		
		
		$data[] = $_id;//?1
        $data['nama'] = $_nama;//?=2
		
		if(isset($_id_edit)){
			//update data lama
			$data[] = $_id_edit;//?=3
			$this->nilai_rating_model->update($data);
			redirect(base_url().'index.php/nilai_rating', 'refresh');
		}else{
			//save data baru
			$this->nilai_rating_model->save($data['nama']);
			$_id = $this->nilai_rating_model->id;
			redirect(base_url().'index.php/nilai_rating', 'refresh');
		}
		
		
	}
	
	
	public function edit()
	{
		$this->load->model( 'nilai_rating_model');
		$_id = $this->input->get('id');
		$rating_edit= $this->nilai_rating_model->findById($_id);
		$data['judul'] = 'Form Update user';
		$data['rating'] = $rating_edit;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('nilai_rating/update', $data);
		$this->load->view('layout/footer');
		
	}

	public function delete(){
		$_id = $this->input->get('id');
        $this->load->model( 'nilai_rating_model');
        $this->nilai_rating_model->delete($_id);
        redirect(base_url().'index.php/nilai_rating', 'refresh');   
	}

	

}