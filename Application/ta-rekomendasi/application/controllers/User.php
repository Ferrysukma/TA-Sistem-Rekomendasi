<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('bing', 'Bahasa Inggris', 'required');
        $this->form_validation->set_rules('bind', 'Bahasa Indonesia', 'required');
        $this->form_validation->set_rules('matematika', 'Matematika', 'required');
        $this->form_validation->set_rules('fisika', 'Fisika', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $name = $this->input->post('nama');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/dasboard', $data);
            $this->load->view('templates/footer2');
        } else {
            $this->User_model->inputNilai();
            redirect('user/hasil');
        }
    }

    public function profile()
    {
        $data['judul'] = 'Profil';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer2');
    }

    public function about()
    {
        $data['judul'] = 'Tentang';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/tentang');
        $this->load->view('templates/footer2');
    }

    public function jurusan()
    {
        $data['judul'] = 'Jurusan';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/jurusan');
        $this->load->view('templates/footer2');
    }

    public function hasil()
    {
        $data['judul'] = 'Pertanyaan';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/rekomendasi', $data);
        $this->load->view('templates/footer2');
    }

    public function rekomendasi_profil()
    {
        $data['judul'] = 'Pertanyaan';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/dashboard2', $data);
        $this->load->view('templates/footer2');
    }

    public function hasil2()
    {
        $data['judul'] = 'Pertanyaan';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/rekomendasi2', $data);
        $this->load->view('templates/footer2');
    }
}