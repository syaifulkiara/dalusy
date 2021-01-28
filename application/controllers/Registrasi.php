<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email sudah pernah terdaftar'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
            'is_unique' => 'Username sudah terpakai, coba username lain!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data = array('title' => 'Form Register');
            $this->load->view('registrasi', $data, FALSE);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama_user'     => htmlspecialchars($this->input->post('nama_user', true)),
                'email'         => htmlspecialchars($email),
                'username'      => htmlspecialchars($this->input->post('username', true)),
                'image'         => 'default.png',
                'password'      => SHA1($this->input->post('password1')),
                'akses_level'   => 2
            ];

            $this->user_model->tambah($data);
                       
            $this->session->set_flashdata('sukses', 'Anda berhasil mendaftar. Silakan Login ');
            redirect('login');
        }
    }

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */
