<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{
    // Sebelum load model wajib beri construct
    public function __construct()
    {
        parent::__construct();
        //taruh model disini
        $this->load->model('M_user');
    }
    // View
    public function index()
    {
        $data['title'] = 'Login Jurnal Mengajar';
        $this->load->view('template/header');
        $this->load->view('V_user/login', $data);
        $this->load->view('template/footer');
    }

    function V_register()
    {
        $data['title'] = 'Registrasi Pengguna';
        $this->load->view('template/header');
        $this->load->view('V_user/register', $data);
        $this->load->view('template/footer');
    }

    // Aksi
    // Fungsi saat klik tombol login
    function C_aksi_login()
    {
        $c_notelp = $this->input->post('f_notelp', TRUE);
        $c_password = md5($this->input->post('f_password', TRUE));
        // Load Model
        $cek = $this->M_user->M_aksi_login($c_notelp, $c_password);
        // Cek session dan isi table
        if ($cek->num_rows() > 0) {
            // cek kolom table untuk session yang mengambil data di table..
            $data = $cek->row_array();
            // Inisialisasi variable
            // ambil variable nama kolom di table db
            $name  = $data['nama_user'];
            // session
            $sesdata = array(
                's_username'    => $name,
                'logged_in'     => TRUE
            );

            // set session
            $this->session->set_userdata($sesdata);
            // Load halaman tujuan 
            redirect(base_url("C_frontend"));
            // Jika salah input akan balek ke halaman login
        } else {

            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
            Username atau password salah!
            </div>');
            redirect('C_user');
        }
    }

    function C_aksi_register()
    {
        $this->M_user->M_register_user();
        // jika sudah regis diarahkan ke halaman login
        redirect('C_user');
    }
}
    
    /* End of file c_test.php */
