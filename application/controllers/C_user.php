<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{
    // Sebelum load model wajib beri construct
    public function __construct()
    {
        parent::__construct();
        //taruh model disini
    }

    public function index()
    {
        $data['title'] = 'Login Jurnal Mengajar';
        $this->load->view('template/header');
        $this->load->view('V_user/login', $data);
        $this->load->view('template/footer');
    }
    // Fungsi saat klik tombol login
    public function c_aksi_login()
    {
        $c_notelp = $this->input->post('f_notelp', TRUE)
    }

    public function c_aksi_register()
    {
        # code...
    }
}
    
    /* End of file c_test.php */
