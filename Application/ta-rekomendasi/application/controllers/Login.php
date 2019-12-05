<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __Construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
    }

    public function index()
    {
        $data['judul'] = 'Login';
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/login');
            $this->load->view('templates/footer');
        } else {
            $this->Register_model->cekUser();
        }
    }
    
    public function registration()
    {
        $data['judul'] = 'Registration';
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email','required|valid_email|trim|is_unique[users.email]',[
            'is_unique' => 'Email has already registered!'
        ]);
        $this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[re_password]',[
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('re_password','Password','required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/register');
            $this->load->view('templates/footer');
        }else{
            $this->Register_model->tambahUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Account Has Been Created. Please Login! </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You Have Been Logged Out! </div>');
        redirect('login');
    }
}