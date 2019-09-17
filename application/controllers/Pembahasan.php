<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pembahasan extends CI_Controller
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
		redirect('soal');
	}

	public function lihat()
	{
		$id = $this->uri->segment(3);
		if (!$id) {
			redirect('soal');
		} else {
			$data = $this->db->get_where('tbl_pembahasan', ['id_soal' => $id])->row_array();

			if ($data) {

				$this->load->view('templates/header');
				$this->load->view('pembahasan/lihat_pembahasan', $data);
				$this->load->view('templates/footer');
			} else {

				$pembahasan = [
					'id_soal' => $id
				];

				$this->db->insert('tbl_pembahasan', $pembahasan);
				$lihat = $this->db->get_where('tbl_pembahasan', ['id_soal' => $id])->row_array();
				$this->load->view('templates/header');
				$this->load->view('pembahasan/lihat_pembahasan', $lihat);
				$this->load->view('templates/footer');
			}
		}
	}

	public function simpan()
	{
		$id = $this->input->post('id');
		$data = [
			'pembahasan' => $this->input->post('pembahasan')
		];

		$this->db->update('tbl_pembahasan', $data, ['id' => $id]);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data berhasil diubah !
			</div>');
		redirect('soal');
	}
}
