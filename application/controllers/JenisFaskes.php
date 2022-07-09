<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisFaskes extends CI_Controller {

    public function index()
	{
		$this->load->model('jenis_faskes_model');
		$datalist = $this->jenis_faskes_model->getAll();
		$data['datalist'] = $datalist;
        $data['judul'] = 'KELOLA FASKES';
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('jenis_faskes/index', $data);
		$this->load->view('layout/footer');
	}

	public function create (){
        $data['judul'] = 'Kelola Data Jenis FASKES';
		$this->load->model('jenis_faskes_model','jenis_faskes');
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('jenis_faskes/create', $data);
		$this->load->view('layout/footer');
	}
    
	public function view(){
	$_id = $this->input->get('id');  
	$this->load->model('jenis_faskes_model', 'jenis_faskes');
	$data['jenis_faskes'] = $this->jenis_faskes->findById($_id);
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
	$this->load->view('jenis_faskes/view',$data);
	$this->load->view('layout/footer');
	}
	
	
    public function save ()
	{
		$this->load->model('jenis_faskes_model', 'jenis_faskes');
		$_id = $this->input->post('id');
		$_nama = $this->input->post('nama_faskes'); 
		$_id_edit = $this->input->post('idedit');//hidden
		
		// $_id = $this->jenis_faskes->id;//?=1
		// $data['id'] = $_id;//?=1
		$data[] = $_id;
        $data['nama'] = $_nama;//?=2
		
		if(isset($_id_edit)){
			//update data lama
			$data[] = $_id_edit;//?=3
			$this->jenis_faskes->update($data);
			redirect(base_url().'index.php/jenis_faskes?id='.$_id, 'refresh');
		}else{
			//save data baru
			// die(print_r($data));
			$this->jenis_faskes->save($data['nama']);
			$_id = $this->jenis_faskes->id;
			redirect(base_url().'index.php/jenis_faskes?id='.$_id, 'refresh');
		}
		
		
	}
	
	public function edit()
	{
		$this->load->model('jenis_faskes_model', 'jenis_faskes');
		$_id = $this->input->get('id');
		$jenis_faskes_edit = $this->jenis_faskes->findById($_id);
		$data['judul'] = 'Form Update Data Jenis FASKES';
		$data['jenis_faskes'] = $jenis_faskes_edit;
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('jenis_faskes/update', $data);
		$this->load->view('layout/footer');
		
	}

	public function delete(){
		$_id = $this->input->get('id');
        $this->load->model('jenis_faskes_model', 'jenis_faskes');
        $this->jenis_faskes->delete($_id);
        redirect(base_url().'index.php/jenis_faskes', 'refresh');   
	}

	public function upload(){
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
						die(print_r($error));

                       $this->load->view('upload_form', $error);
						
                }
                else
                {
						//panggil model
						$this->load->model('jenis_faskes_model', 'jenis_faskes');
						$array_data[] = $new_name; //? pertama
						$array_data[] = $_id;
						$this->jenis_faskes->update_foto($array_data);
                        $data = array('upload_data' => $this->upload->data());
						redirect(base_url().'index.php/jenis_faskes/view?id='.$_id, 'refresh'); 	
                        //$this->load->view('upload_success', $data);
					
                }
				redirect(base_url().'index.php/jenis_faskes/view?id='.$_id, 'refresh');
        }
}
?>