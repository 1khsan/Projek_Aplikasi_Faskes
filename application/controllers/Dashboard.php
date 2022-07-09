<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model('faskes_model');
		$this->load->model('jenis_faskes_model');
		$faskes = $this->faskes_model->getAll();
		$this->load->model('nilai_rating_model');
		$rating = $this->nilai_rating_model->getAll();
		$this->load->model('komentar_model');
		$komentar = $this->komentar_model->getAll();
		$data['faskes']=$faskes;
		$data['rating']=$rating;
		$data['komentar']=$komentar;
		$datalist = $this->jenis_faskes_model->getAll();
		$data['datalist'] = $datalist;
		return $this->load->view('dashboard/index',$data);
	}
	
	
}