<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{
    // Sebelum load model wajib beri construct
    public function __construct()
    {
        parent::__construct();
        //taruh model/library disini :)
        $this->load->library('form_validation');
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
        $c_password = $this->input->post('f_password', TRUE);
        // LOAD MODEL NEW VERSION Mencocokan Inputan dengan Isi Table
        // Cek input berdasarkan nomer telepon di table dan form apakah nomer sudah ada atau belum
        $key = ['no_telepon' => $c_notelp];
        $cek = $this->M_user->getDataLogin($key);

        // Num rows Untuk cek apakah user terdaftar atau belum
        if ($cek->num_rows() > 0) {

            // Untuk validasi password input dan table database apakah datanya sudah ada atau belum
            $table_row = $cek->row();

            if (password_verify($c_password, $table_row->password)) {
                // Session dari ID dan Username 
                $this->session->set_userdata('sess_id', $table_row->id_profile);
                $this->session->set_userdata('sess_username', $table_row->nama_user);

                // Jika ada level admin, user2, dsb

                // if ($table_row->level == "Admin") {
                //     # code...
                // }elseif ($table_row->level == "User") {
                //     # code...
                // }
                redirect('C_frontend');
            } else {
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Nomor Telepon Atau Password salah!
             </div>');
                redirect('C_user');
            }
            // Kondisi akun belum ada/data belum ada di table
            // 
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
             Akun Belum Terdaftar
             </div>');
            redirect('C_user');
        }

        // Load Model OLD VERSION
        // $cek = $this->M_user->M_aksi_login($c_notelp, $c_password);
        // // Cek session dan isi table
        // if ($cek->num_rows() > 0) {
        //     // cek kolom table untuk session yang mengambil data di table..
        //     $data = $cek->row_array();
        //     // Inisialisasi variable
        //     // ambil variable nama kolom di table db
        //     $name  = $data['nama_user'];
        //     // session
        //     $sesdata = array(
        //         's_username'    => $name,
        //         'logged_in'     => TRUE
        //     );

        //     // set session
        //     $this->session->set_userdata($sesdata);
        //     // Load halaman tujuan 
        //     redirect(base_url("C_frontend"));
        //     // Jika salah input akan balek ke halaman login
        // } else {

        //     echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
        //     Username atau password salah!
        //     </div>');
        //     redirect('C_user');
        // }
    }

    function C_aksi_register()
    {
        // Form Validation 
        $this->form_validation->set_rules('f_nama', 'Nama Tidak Boleh Kosong!', 'required');
        $this->form_validation->set_rules('f_notelp', 'Nomer Telepon Tidak Boleh Kosong!', 'required|numeric');
        $this->form_validation->set_rules('f_email', 'Email Tidak Boleh Kosong!', 'required|valid_email');
        $this->form_validation->set_rules('f_instansi', 'Nama Instansi Tidak Boleh Kosong!', 'required');
        $this->form_validation->set_rules('f_password', 'Password Wajib di isi', 'required');
        $this->form_validation->set_rules('f_konfpassword', 'Konfirmasi Password sesuai password diatas!', 'required|matches[f_password]');
        // Kondisi Benar
        if ($this->form_validation->run()) {
            $this->M_user->M_register_user();
            redirect('C_user');
            // Lek Salah 
        } else {
            // Load view register
            $this->V_register();
        }
    }
}
    
    /* End of file c_test.php */
