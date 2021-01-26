<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_frontend extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_frontend');
    }

    // Dashboard
    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/V_dashboard', $data);
        $this->load->view('template/admin/footer');
    }

    // Jurnal
    function jurnal()
    {
        // get data table jurnal yang sudah di join
        $data = array(
            'title' => "Jurnal",
            'tampil_jurnal' => $this->M_frontend->M_tampil_jurnal()
        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_jurnal/V_jurnal', $data);
        $this->load->view('template/admin/footer');
    }

    // Tambah Jurnal View
    function add_jurnal()
    {
        // Menampilkan data dari table kelas ke menu tambah jurnal di select.
        $data = array(
            'title' => "Tambah Jurnal",
            'tampil_kelas' => $this->M_frontend->M_tampil_kelas()
        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_jurnal/V_tambah', $data);
        $this->load->view('template/admin/footer');
    }

    // Edit Jurnal View
    function edit_jurnal($id)
    {
        $data = array(
            'title' => "Edit Jurnal",
            'tampil_kelas' => $this->M_frontend->M_tampil_kelas(),
            'tampil_jurnal_id' => $this->M_frontend->M_tampil_jurnal_id($id)

        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_jurnal/V_edit', $data);
        $this->load->view('template/admin/footer');
    }

    // Hapus Jurnal

    // Aksi Tambah Jurnal
    function aksi_add_jurnal()
    {
        $this->M_frontend->M_tambah_jurnal();

        redirect('C_frontend/jurnal', 'refresh');
    }
}
    
    /* End of file C_frontend.php */
