<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('nis')) {
			redirect('test');
		}
	}

	public function index()
	{
		$data = $this->db->get('tbl_soal')->row_array();
		$id = $data['id'];
		$soal = $this->db->get_where('tbl_soal', ['id' => $id])->row_array();
		$this->load->view('templates/test_header');
		$this->load->view('test/dashboard', $soal);
		$this->load->view('templates/test_footer');
	}

	public function soal()
	{
		$id = $this->input->post('id');
		if ($id == NUll) {
			$this->_end();
		} else {
			$jawaban = $this->input->post('jawaban');
			$jawabanSiswa = $this->db->get_where('tbl_jawaban', ['nis_siswa' => $this->session->userdata('nis'), 'id_soal' => $id])->row_array();
			if ($jawabanSiswa) {
				$data = [
					'jawaban' => $jawaban
				];
				$this->db->update('tbl_jawaban', $data, ['nis_siswa' => $this->session->userdata('nis'), 'id_soal' => $id]);
			} else {
				$data = [
					'nis_siswa' => $this->session->userdata('nis'),
					'id_soal' => $id,
					'jawaban' => $jawaban
				];

				$this->db->insert('tbl_jawaban', $data);
			}

			$idNew = $id + 1;
			$soal = $this->db->get_where('tbl_soal', ['id' => $idNew])->row_array();
			if ($soal) {
				$this->load->view('templates/test_header');
				$this->load->view('test/dashboard', $soal);
				$this->load->view('templates/test_footer');
			} else {
				$this->_end();
			}
		}
	}

	private function _end()
	{
		$data['benar'] = $this->db->get('tbl_soal')->result_array();
		$data['jawaban'] = $this->db->get_where('tbl_jawaban', ['nis_siswa' => $this->session->userdata('nis')])->result_array();
		$this->load->view('templates/test_header');
		$this->load->view('test/end', $data);
		$this->load->view('templates/test_footer');
	}

	public function pembahasan()
	{
		$id = $this->uri->segment(3);
		if ($id) {
			$data = $this->db->get_where('tbl_pembahasan', ['id_soal' => $id])->row_array();
			if ($data) {
				$this->load->view('templates/test_header');
				$this->load->view('test/pembahasan', $data);
				$this->load->view('templates/test_footer');
			} else {
				$data['pembahasan'] = "Tidak ada pembahasan untuk soal ini";
				$this->load->view('templates/test_header');
				$this->load->view('test/pembahasan', $data);
				$this->load->view('templates/test_footer');
			}
		} else {
			redirect('user/soal');
		}
	}
}
