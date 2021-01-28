<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ovt_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($id_overtime = null)
	{
		$this->db->from('overtime');
		if($id_overtime != null){
			$this->db->where('id_overtime', $id_overtime);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function listing()
	{
		$id = $this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('overtime');
		$this->db->join('users', 'users.id_user = overtime.id_user', 'left');
		$this->db->where('email', $id);
		$this->db->order_by('id_overtime', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_overtime)
	{
		$this->db->select('overtime.*,
						   users.nama_user
							');
		$this->db->from('overtime');
		$this->db->join('users', 'users.id_user = overtime.id_user', 'left');
		$this->db->where('id_overtime', $id_overtime);
		$this->db->order_by('id_overtime', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function ovt_total()
	{
		$id = $this->session->userdata('id_user');
		$this->db->select('id_user');
		$this->db->from('overtime');
		$this->db->where('id_user', $id);
		
		$query = $this->db->get();
		return $query;
	}

	public function tambah($data)
	{
		$this->db->insert('overtime', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_overtime', $data['id_overtime']);
		$this->db->update('overtime', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_overtime', $data['id_overtime']);
		$this->db->delete('overtime', $data);
	}

}

/* End of file Ovt_model.php */
/* Location: ./application/models/Ovt_model.php */