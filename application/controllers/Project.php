<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Project',
					  'content' => 'project/index'
		 );
		$this->load->view('layouts/wrapper', $data, FALSE);
	}

}

/* End of file Project.php */
/* Location: ./application/controllers/Project.php */