<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('test');
		}
	}
	public function index()
	{
		$data['siswa'] = $this->db->get('tbl_siswa')->result_array();
		$this->load->view('templates/header');
		$this->load->view('peserta/list_peserta', $data);
		$this->load->view('templates/footer');
	}

	public function hapus()
	{
		$id = $this->uri->segment(3);

		if (!$id) {
			redirect('peserta');
		}

		$this->db->delete('tbl_siswa', ['nis' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data berhasil dihapus !
			</div>');
		redirect('peserta');
	}
}
