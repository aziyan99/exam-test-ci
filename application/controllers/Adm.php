<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/test_header');
        $this->load->view('dashboard/login');
        $this->load->view('templates/test_footer');
    }

    public function cek_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));


        $cek = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();

        if ($cek) {
            if ($cek['password'] == $password) {
                $sessData = [
                    'username' => $cek['username'],
                    'nama' => $cek['nama']
                ];

                $this->session->set_userdata($sessData);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Selamat Datang ' . $this->session->userdata('nama') . ' !
					</div>');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Username atau Kata Sandi anda salah !
					</div>');
                redirect('adm');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Username atau Kata Sandi anda salah !
				</div>');
            redirect('adm');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda telah keluar !
			</div>');
        redirect('adm');
    }
}
