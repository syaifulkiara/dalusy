<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(  'title'         => 'My Profile',
                        'user'          => $user,
                        'content'       => 'profile/index'
                    );
        $this->load->view('layouts/wrapper', $data, FALSE);
    }


    public function edit()
    {
        $user  = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_user', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data = array(  'title'         => 'Edit Profile',
                            'user'          =>  $user,
                            'content'       => 'profile/edit'
                    );
        $this->load->view('layouts/wrapper', $data, FALSE);

        } else {
            $data = array(  'id_user'       => $this->session->userdata('id_user'),
                            'nama_user' => $this->input->post('nama_user') ,
                            'email'    => $this->input->post('email'),
                            'username'  => $this->input->post('username')
                             );
        
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '99048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->user_model->get($user['id_user'])->row();
                    if ($old_image->image != 'default.png') {
                        $target_file = './assets/img/profile/' . $old_image->image;
                        unlink($target_file);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors('<p>', '</p>');
                }
            }
            // proses oleh model
            $this->user_model->edit($data);

            $this->session->set_flashdata('sukses', 'Your profile has been updated!');
            redirect('profile');
        }
    }


    public function ubahPassword()
    {
        $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            
            $data = array(  'title'         => 'Ubah Password',
                            'user'          =>  $user,
                            'content'       =>  'profile/password'
                    );
        $this->load->view('layouts/wrapper', $data, FALSE);
        
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $user['password'])) {
                $this->session->set_flashdata('notifpass', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('profile/ubahpassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('notifpass', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('profile/ubahpassword');
                } else {
                    // password sudah ok
                    $password_hash = SHA1($new_password);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('users');

                    $this->session->set_flashdata('notifpass', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('profile');
                }
            }
        }
    }
}
