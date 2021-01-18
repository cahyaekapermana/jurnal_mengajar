<?php


defined('BASEPATH') or exit('No direct script access allowed');

class c_test extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('test');
        $this->load->view('template/footer');
    }
}
    
    /* End of file c_test.php */
