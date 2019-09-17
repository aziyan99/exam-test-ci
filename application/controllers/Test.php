<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/test_header');
		$this->load->view('test/index');
		$this->load->view('templates/test_footer');
	}

	public function daftar()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nis', 'Nis', 'trim|is_unique[tbl_siswa.nis]', [
			'is_unique' => 'Nis sudah terdaftar'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/test_header');
			$this->load->view('test/daftar');
			$this->load->view('templates/test_footer');
		} else {
			$data = [
				'nis' => htmlspecialchars($this->input->post('nis')),
				'nama' => htmlspecialchars($this->input->post('nama')),
				'kelas' => htmlspecialchars($this->input->post('kelas')),
				'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah')),
				'password' => htmlspecialchars($this->input->post('password'))
			];

			$this->db->insert('tbl_siswa', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Silahkan masuk !
				</div>');
			redirect('test');
		}
	}

	public function cek_login()
	{
		$nis = htmlspecialchars($this->input->post('nis'));
		$password = htmlspecialchars($this->input->post('password'));


		$cek = $this->db->get_where('tbl_siswa', ['nis' => $nis])->row_array();

		if ($cek) {
			if ($cek['password'] == $password) {
				$sessData = [
					'nis' => $cek['nis'],
					'nama' => $cek['nama'],
					'kelas' => $cek['kelas'],
					'asal_sekolah' => $cek['asal_sekolah']
				];

				$this->session->set_userdata($sessData);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Selamat Datang ' . $this->session->userdata('nama') . ' !
					</div>');
				redirect('user');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Nis atau Kata Sandi anda salah !
					</div>');
				redirect('test');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Nis atau Kata Sandi anda salah !
				</div>');
			redirect('test');
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('nis');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('asal_sekolah');
		$this->session->unset_userdata('kelas');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda telah keluar !
			</div>');
		redirect('test');
	}
}
