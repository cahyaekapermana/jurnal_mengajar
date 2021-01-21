<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_frontend extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/admin/header');
        $this->load->view('Frontend/V_dashboard');
        $this->load->view('template/admin/footer');
    }
}
    
    /* End of file C_frontend.php */
