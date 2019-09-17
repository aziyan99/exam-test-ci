<?php

defined('BASEPATH') or exit('No direct script acess allowed');

class Soal extends CI_Controller
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
        $data['soal'] = $this->db->get('tbl_soal')->result_array();
        $this->load->view('templates/header');
        $this->load->view('soal/list_soal', $data);
        $this->load->view('templates/footer');
    }

    public function v_tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('soal/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'soal' => $this->input->post('soal'),
            'jawaban_a' => $this->input->post('jawaban_a'),
            'jawaban_b' => $this->input->post('jawaban_b'),
            'jawaban_c' => $this->input->post('jawaban_c'),
            'jawaban_d' => $this->input->post('jawaban_d'),
            'jawaban_e' => $this->input->post('jawaban_e'),
            'jawaban_yang_benar' => $this->input->post('jawaban_yang_benar'),
        ];

        $this->db->insert('tbl_soal', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Data berhasil ditambahkan !
          </div>');
        redirect('soal');
    }

    public function v_ubah()
    {
        $id = $this->uri->segment(3);
        $data['soal'] = $this->db->get_where('tbl_soal', ['id' => $id])->row_array();
        $this->load->view('templates/header');
        $this->load->view('soal/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function ubah()
    {
        $id = $this->input->post('id');
        $data = [
            'soal' => $this->input->post('soal'),
            'jawaban_a' => $this->input->post('jawaban_a'),
            'jawaban_b' => $this->input->post('jawaban_b'),
            'jawaban_c' => $this->input->post('jawaban_c'),
            'jawaban_d' => $this->input->post('jawaban_d'),
            'jawaban_e' => $this->input->post('jawaban_e'),
            'jawaban_yang_benar' => $this->input->post('jawaban_yang_benar')
        ];

        $this->db->update('tbl_soal', $data, ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah !
            </div>');
        redirect('soal');
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->delete('tbl_soal', ['id' => $id]);
        $this->db->delete('tbl_pembahasan', ['id_soal' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah !
            </div>');
        redirect('soal');
    }
}
