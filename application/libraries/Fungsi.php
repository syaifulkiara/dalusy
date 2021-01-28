<?php 

	Class Fungsi {
		protected $CI;
		public function __construct(){
		$this->CI =& get_instance();
	}

	function user_login(){
		$this->CI->load->model('user_model');
		$id_user 	= $this->CI->session->userdata('id_user');
		$user_data 	= $this->CI->user_model->get($id_user)->row();
		return $user_data;
	}

	function PdfGenerator($html, $filename, $paper, $orientation){
		$dompdf = new Dompdf\Dompdf();
		$dompdf->loadHtml($html);
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($paper, $orientation);
		// Render the HTML as PDF
		$dompdf->render();
		// Output the generated PDF to Browser
		$dompdf->stream($filename, array('Attachment' => 0));
	}

	public function count_overtime(){
		$this->CI->load->model('ovt_model');
		return $this->CI->ovt_model->get()->num_rows();
	}

	public function count_ovt_id(){
		$this->CI->load->model('ovt_model');
		return $this->CI->ovt_model->ovt_total()->num_rows();
	}

	public function count_user(){
		$this->CI->load->model('user_model');
		return $this->CI->user_model->get()->num_rows();
	}
}