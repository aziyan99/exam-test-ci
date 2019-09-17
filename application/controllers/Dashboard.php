<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$this->load->view('templates/header');
		$this->load->view('dashboard/index');
		$this->load->view('templates/footer');
	}

	public function hasil()
	{
		// 	$this->db->select('*');
		// 	$this->db->from('blogs');
		// 	$this->db->join('comments', 'comments.id = blogs.id');
		// 	$query = $this->db->get();

		$this->db->select('*');
		$this->db->from('tbl_jawaban');
		$this->db->join('tbl_siswa', 'tbl_siswa.nis = tbl_jawaban.nis_siswa');

		$data['hasil'] = $this->db->get()->result_array();

		$this->load->view('templates/header');
		$this->load->view('dashboard/hasil', $data);
		$this->load->view('templates/footer');
	}
}
