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
}
    
    /* End of file c_test.php */
