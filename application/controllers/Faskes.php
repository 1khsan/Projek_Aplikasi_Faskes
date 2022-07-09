<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes extends CI_Controller {

	public function index()
	{
		$this->load->model('faskes_model');
		$datalist = $this->faskes_model->getAll();
		$data['datalist'] = $datalist;
		$data['judul'] = 'KELOLA FASKES';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('faskes/index', $data);
		$this->load->view('layout/footer');
	}
	// public function rumah_sakit()
	// {
	// 	$this->load->model('faskes_model');
	// 	$datalist = $this->faskes_model->getAll();
	// 	$data['datalist'] = $datalist;
	// 	$data['judul'] = 'KELOLA FASKES';
	// 	$this->load->view('layout/header');
	// 	$this->load->view('layout/sidebar');
	// 	$this->load->view('faskes/faskes1', $data);
	// 	$this->load->view('layout/footer');
	// }
	
	public function create (){
        $data['judul'] = 'Kelola Data  FASKES';
		$this->load->model('jenis_faskes_model');
		$data['jenis_faskes']=$this->jenis_faskes_model->getAll();
		$this->load->model('kecamatan_model');
		$data['kecamatan']=$this->kecamatan_model->getAll();
		$this->load->model('faskes_model');
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('faskes/create', $data);
		$this->load->view('layout/footer');
	}
	
	public function view(){
		$_id = $this->input->get('id');  
		$this->load->model('faskes_model');
		$data['faskes'] = $this->faskes_model->findById($_id);
		$data['judul'] = 'Kelola Faskes';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('faskes/view',$data);
		$this->load->view('layout/footer');
		}
		
		
		public function save ()
		{
			
			$this->load->model('faskes_model');
			$_nama = $this->input->post('nama'); 
			$_alamat = $this->input->post('alamat');
			$_latlong = $this->input->post('latlong');
			$_jenis_id = $this->input->post('jenis_id');
			$_deskripsi = $this->input->post('deskripsi');
			$_skor_rating = $this->input->post('skor_rating');
			$_kecamatan_id = $this->input->post('kecamatan_id');
			$_website = $this->input->post('website');
			$_jumlah_dokter = $this->input->post('jumlah_dokter');
			$_jumlah_pegawai = $this->input->post('jumlah_pegawai');
			$_id_edit = $this->input->post('idedit');//hidden?11
			
			// $_id = $this->jenis_faskes->id;//?=1
			
			$data['nama'] = $_nama;//?=2
			$data['alamat'] = $_alamat;//?=3
			$data['latlong'] = $_latlong;//?=4
			$data['jenis_id'] = $_jenis_id;//?=5
			$data['deskripsi'] = $_deskripsi;//?=6
			$data['skor_rating'] = $_skor_rating;//?=7
			$data['kecamatan_id'] = $_kecamatan_id;//?=8
			$data['website'] = $_website;//?=9
			$data['jumlah_dokter'] = $_jumlah_dokter;//?=10
			$data['jumlah_pegawai'] = $_jumlah_pegawai;//?=11
			
			if(isset($_id_edit)){
				//update data lama
				$data[] = $_id_edit;//?=12
				$this->faskes_model->update($data);
				redirect(base_url().'index.php/faskes', 'refresh');
			}else{
				//save data baru
				// die(print_r($data));
				$this->faskes_model->save($data);
				$_id = $this->faskes_model->id;
				redirect(base_url().'index.php/faskes?', 'refresh');
			}
			
			
		}
		
		public function edit()
		{
			$this->load->model('faskes_model');
			$_id = $this->input->get('id');
			$faskes_edit = $this->faskes_model->findById($_id);
			$this->load->model('jenis_faskes_model');
			$data['jenis_faskes']=$this->jenis_faskes_model->getAll();
			$this->load->model('kecamatan_model');
			$data['kecamatan']=$this->kecamatan_model->getAll();
			$data['judul'] = 'Form Update Data FASKES';
			$data['faskes'] = $faskes_edit;
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('faskes/update', $data);
			$this->load->view('layout/footer');
			
		}
	
		public function delete(){
			$_id = $this->input->get('id');
			$this->load->model('faskes_model');
			$this->faskes_model->delete($_id);
			redirect(base_url().'index.php/faskes', 'refresh');   
		}
	
		public function upload1(){
					$config['upload_path']          = './images/uploads/';
					$config['allowed_types']        = 'jpg|png|jpeg';
					$config['max_size']             = 0	;
					$config['max_width']            = 6000;
					$config['max_height']           = 6000;
					// $id = $this->input->post('id');
					
					$_id=$this->input->post('id');
					$array = explode('.',$_FILES['fotojf']['name']);
					//jika ada titik dianatara nama file fotojf akan dibagi menjadi array
					//[fotojf][name] didalam foto js terdapat bbrp properti bawaan salah satunya name
					$extension = end($array);
					//mengambil array terakhir  bisa jpg atau png
					$new_name= $_id.'.'.$extension;
					$config['file_name'] = $new_name;
					//dioverride dengan nama yang baru
					//die(print_r($_FILES));
					 $this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('fotojf'))
					{
							$error = array('error' => $this->upload->display_errors());
							//die(print_r($error));
							redirect(base_url('index.php/faskes/view?id='.$_id));
						  // $this->load->view('upload_form', $error);
							
					}
					else
					{
							//panggil model
							$this->load->model('faskes_model');
							$array_data[] = $new_name; //? pertama
							$array_data[] = $_id;
							$this->faskes_model->update_foto1($array_data);
							$data = array('upload_data' => $this->upload->data());
	
							//$this->load->view('upload_success', $data);
						
					}
					redirect(base_url().'index.php/faskes/view?id='.$_id, 'refresh');
			}
		public function upload2(){
					$config['upload_path']          = './images/uploads/';
					$config['allowed_types']        = 'jpg|png|jpeg';
					$config['max_size']             = 0	;
					$config['max_width']            = 6000;
					$config['max_height']           = 6000;
					// $id = $this->input->post('id');
					
					$_id=$this->input->post('id');
					$array = explode('.',$_FILES['fotojf']['name']);
					//jika ada titik dianatara nama file fotojf akan dibagi menjadi array
					//[fotojf][name] didalam foto js terdapat bbrp properti bawaan salah satunya name
					$extension = end($array);
					//mengambil array terakhir  bisa jpg atau png
					$new_name= $_id.'.'.$extension;
					$config['file_name'] = $new_name;
					//dioverride dengan nama yang baru
					//die(print_r($_FILES));
					 $this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('fotojf'))
					{
							$error = array('error' => $this->upload->display_errors());
							//die(print_r($error));
							redirect(base_url('index.php/faskes/view?id='.$_id));
						  // $this->load->view('upload_form', $error);
							
					}
					else
					{
							//panggil model
							$this->load->model('faskes_model');
							$array_data[] = $new_name; //? pertama
							$array_data[] = $_id;
							$this->faskes_model->update_foto2($array_data);
							$data = array('upload_data' => $this->upload->data());
	
							//$this->load->view('upload_success', $data);
						
					}
					redirect(base_url().'index.php/faskes/view?id='.$_id, 'refresh');
			}
		public function upload3(){
					$config['upload_path']          = './images/uploads/';
					$config['allowed_types']        = 'jpg|png|jpeg';
					$config['max_size']             = 0	;
					$config['max_width']            = 6000;
					$config['max_height']           = 6000;
					// $id = $this->input->post('id');
					
					$_id=$this->input->post('id');
					$array = explode('.',$_FILES['fotojf']['name']);
					//jika ada titik dianatara nama file fotojf akan dibagi menjadi array
					//[fotojf][name] didalam foto js terdapat bbrp properti bawaan salah satunya name
					$extension = end($array);
					//mengambil array terakhir  bisa jpg atau png
					$new_name= $_id.'.'.$extension;
					$config['file_name'] = $new_name;
					//dioverride dengan nama yang baru
					//die(print_r($_FILES));
					 $this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('fotojf'))
					{
							$error = array('error' => $this->upload->display_errors());
							//die(print_r($error));
							redirect(base_url('index.php/faskes/view?id='.$_id));
						  // $this->load->view('upload_form', $error);
							
					}
					else
					{
							//panggil model
							$this->load->model('faskes_model');
							$array_data[] = $new_name; //? pertama
							$array_data[] = $_id;
							$this->faskes_model->update_foto3($array_data);
							$data = array('upload_data' => $this->upload->data());
	
							//$this->load->view('upload_success', $data);
						
					}
					redirect(base_url().'index.php/faskes/view?id='.$_id, 'refresh');
			}
}