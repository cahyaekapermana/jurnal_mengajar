<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_frontend extends CI_Controller
{
    // Dashboard
    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('template/admin/header');
        $this->load->view('Frontend/V_dashboard');
        $this->load->view('template/admin/footer');
    }

    // Jurnal
    function jurnal()
    {
        $data['title'] = 'Jurnal';
        $this->load->view('template/admin/header');
        $this->load->view('Frontend/frontend_jurnal/V_jurnal');
        $this->load->view('template/admin/footer');
    }

     // Tambah Jurnal
    function add_jurnal()
    {
        $data['title'] = 'Tambah Jurnal';
        $this->load->view('template/admin/header');
        $this->load->view('Frontend/frontend_jurnal/V_tambah');
        $this->load->view('template/admin/footer');
    }
}
    
    /* End of file C_frontend.php */
