<?php

class Dashboard_tenant extends CI_Controller{
    
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('templates_tenant/header');
        $this->load->view('templates_tenant/sidebar');
        $this->load->view('tenant/dashboard');
        $this->load->view('templates_tenant/footer');
    }
}