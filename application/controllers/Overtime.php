<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overtime extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->my_login->check_login();
		$this->load->helper('tanggal');
		$this->load->model('user_model');
		$this->load->model('ovt_model');
	}

	public function index()
	{
		$overtime = $this->ovt_model->listing();
		$total = $this->ovt_model->ovt_total();
		// var_dump($overtime);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('day_date', 'Day Date', 'required');
	    // $this->form_validation->set_rules('start', 'Start', 'required');
	    $this->form_validation->set_rules('finish', 'Finish', 'required');
	    $this->form_validation->set_rules('activity', 'Activity', 'required');
	    $this->form_validation->set_rules('location', 'Location', 'required');

	     if ($this->form_validation->run() === FALSE){
		// end validasi

		
		$data = array('title'	=> 'Data Overtime ( <i><b>'.$this->session->userdata('nama_user').'</b></i> )',
					  'overtime'=> $overtime,
					  
					  'content' => 'overtime/index'
		 );
		$this->load->view('layouts/wrapper', $data, FALSE);

		}else{

			$data = array( 	'id_user'	 => $this->session->userdata('id_user'),
					        'day_date'	 => date('d-m-Y',strtotime($this->input->post('day_date'))),
					        'start' 	 => $this->input->post('start'),
					        'finish'	 => $this->input->post('finish'),
					        'ovt'		 => $this->input->post('ovt'),
					        'project_no' => $this->input->post('project_no'),
					        'activity' 	 => $this->input->post('activity'),
					        'location' 	 => $this->input->post('location'),
					        'cek'		 => $this->input->post('cek'),
					        'date' 	     => date('Y-m-d H:i:s')
						  );

			// proses oleh model
			$this->ovt_model->tambah($data);
			// notifikasi
			$this->session->set_flashdata('sukses', 'Data Berhasil ditambah !');
			redirect('overtime','refresh');
	    }		
	}

	public function tambah()
	{
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('day_date', 'Day Date', 'required');
	    // $this->form_validation->set_rules('start', 'Start', 'required');
	    $this->form_validation->set_rules('finish', 'Finish', 'required');
	    $this->form_validation->set_rules('activity', 'Activity', 'required');
	    $this->form_validation->set_rules('location', 'Location', 'required');

	     if ($this->form_validation->run() === FALSE){
		// end validasi
		$data = array(	'title'			=> 'Tambah Overtime',
						'content' 		=> 'overtime/tambah_baru'
					);
		$this->load->view('layouts/wrapper', $data, FALSE);
		// jika validasi oke,maka masuk database
		}else{

	    	$data = array( 	'id_user'	 => $this->session->userdata('id_user'),
					        'day_date'	 => date('d-m-Y',strtotime($this->input->post('day_date'))),
					        'start' 	 => $this->input->post('start'),
					        'finish'	 => $this->input->post('finish'),
					        'ovt'		 => $this->input->post('ovt'),
					        'project_no' => $this->input->post('project_no'),
					        'activity' 	 => $this->input->post('activity'),
					        'location' 	 => $this->input->post('location'),
					        'cek'		 => $this->input->post('cek'),
					        'date' 	     => date('Y-m-d H:i:s')
						  );

	        // proses oleh model
			$this->ovt_model->tambah($data);
			// notifikasi
			$this->session->set_flashdata('sukses', 'Data Berhasil ditambah !');
			redirect('overtime','refresh');
	    }		
	}

	public function edit($id_overtime)
	{
		$overtime = $this->ovt_model->detail($id_overtime);
		$user = $this->user_model->listing();

		$this->load->library('form_validation');
	    $this->form_validation->set_rules('day_date', 'Day Date', 'required');
	    // $this->form_validation->set_rules('start', 'Start', 'required');
	    $this->form_validation->set_rules('finish', 'Finish', 'required');
	    $this->form_validation->set_rules('activity', 'Activity', 'required');
	    $this->form_validation->set_rules('location', 'Location', 'required');

	     if ($this->form_validation->run() === FALSE){
		// end validasi
		$data = array(	'title'			=> 'Edit Data Overtime',
						'overtime'		=>  $overtime,
						'user'			=>  $user,
						'content' 		=> 'overtime/edit'
					);
		$this->load->view('layouts/wrapper', $data, FALSE);
		// jika validasi oke,maka masuk database
		}else{

	    	$data = array( 	'id_overtime'=> $id_overtime,
	    					'id_user'	 => $this->session->userdata('id_user'),
					        'day_date'	 => date('d-m-Y',strtotime($this->input->post('day_date'))),
					        'start' 	 => $this->input->post('start'),
					        'finish'	 => $this->input->post('finish'),
					        'ovt'		 => $this->input->post('ovt'),
					        'project_no' => $this->input->post('project_no'),
					        'activity' 	 => $this->input->post('activity'),
					        'location' 	 => $this->input->post('location'),
					        'cek'		 => $this->input->post('cek'),
					        'date' 	     => date('Y-m-d H:i:s')
						  );

	        // proses oleh model
			$this->ovt_model->edit($data);
			// notifikasi
			$this->session->set_flashdata('sukses', 'Data Berhasil diubah !');
			redirect('overtime','refresh');
	    }		
	}

	public function delete($id_overtime)
		{
			$data = array('id_overtime' => $id_overtime);
			// Proses Delete
			$this->ovt_model->delete($data);
			// Notifikasi
			$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus !');
			redirect(base_url('overtime'),'refresh');

		}

	public function cetak($id_overtime)
	{
		$overtime 	= $this->ovt_model->detail($id_overtime);
		$id_user 	= $overtime->id_user;
		$user   	= $this->user_model->detail($id_user);
		$data 		= array(	'title'		=> $user->id_user,
								'user'		=> $user,
								'overtime'	=> $overtime
								);

		$this->load->view('overtime/cetak', $data, FALSE);
	}	

}

/* End of file Overtime.php */
/* Location: ./application/controllers/Overtime.php */