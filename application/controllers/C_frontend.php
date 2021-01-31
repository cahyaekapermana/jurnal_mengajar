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

    // ==================================================================================================================
    // JURNAL
    // ==================================================================================================================

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
            'title'         => "Tambah Jurnal",
            'tampil_kelas'  => $this->M_frontend->M_tampil_kelas(),
        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_jurnal/V_tambah', $data);
        $this->load->view('template/admin/footer');
    }

    function edit_jurnal($id)
    {
        $data = array(
            'title'             => "Edit Jurnal",
            'tampil_kelas'      => $this->M_frontend->M_tampil_kelas(),
            'tampil_jurnal_id'  => $this->M_frontend->M_tampil_jurnal_id($id)
        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_jurnal/V_edit', $data);
        $this->load->view('template/admin/footer');
    }

    // Detail Jurnal Join
    function detail_jurnal($id_jurnal, $id_kelas)
    {
        $data = array(
            'title'             => "Detail Jurnal",
            'tampil_detail'     => $this->M_frontend->M_detail_jurnal($id_jurnal, $id_kelas)
        );


        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_jurnal/V_detail', $data);
        $this->load->view('template/admin/footer');
    }

    function hapus_jurnal($id)
    {
        $this->M_frontend->M_hapus_jurnal($id);

        redirect('C_frontend/jurnal');
    }

    // Hapus Jurnal

    // Aksi Tambah Jurnal
    function aksi_add_jurnal()
    {
        $this->M_frontend->M_tambah_jurnal();

        redirect('C_frontend/jurnal');
    }

    // Aksi Edit Jurnal
    function aksi_edit_jurnal()
    {
        $this->M_frontend->M_edit_jurnal();

        redirect('C_frontend/jurnal');
    }

    // ==================================================================================================================
    // KELAS
    // ==================================================================================================================
    function data_kelas()
    {
        $data = array(
            'title'             => "Data Kelas",
            'tampil_kelas' => $this->M_frontend->M_tampil_kelas()

        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_kelas/V_kelas', $data);
        $this->load->view('template/admin/footer');
    }

    function tambah_kelas()
    {
        $data = array(
            'title'       => "Tambah Kelas"
        );

        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_kelas/V_tambah', $data);
        $this->load->view('template/admin/footer');
    }

    function edit_kelas($id)
    {
        $data = array(
            'title'             => "Edit Kelas",
            'tampil_kelas_id'   => $this->M_frontend->M_tampil_kelas_id($id),

        );

        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_kelas/V_edit', $data);
        $this->load->view('template/admin/footer');
    }

    function aksi_add_kelas()
    {

        $this->M_frontend->M_tambah_kelas();

        redirect('C_frontend/data_kelas');
    }

    function aksi_edit_kelas()
    {
        $this->M_frontend->M_edit_kelas();

        redirect('C_frontend/data_kelas');
    }

    function hapus_kelas($id)
    {
        $this->M_frontend->M_hapus_kelas($id);

        redirect('C_frontend/data_kelas');
    }

    // ==================================================================================================================
    // View Data Siswa Berdasarkan id_kelas
    // ==================================================================================================================

    function data_siswa($var_id_kelas)
    {

        $data = array(
            'title'                   => "Data Siswa",
            'datasiswa_by_kelas'      => $this->M_frontend->M_datasiswa_by_kelas($var_id_kelas),
            'tampil_kelas_id'         => $this->M_frontend->M_tampil_kelas_id($var_id_kelas)
        );

        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_siswa/V_siswa', $data);
        $this->load->view('template/admin/footer');
    }

    function tambah_siswa()
    {
        $data = array(
            'title'              => "Tambah Siswa",
        );

        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_siswa/V_tambah', $data);
        $this->load->view('template/admin/footer');
    }

    function edit_siswa($var_idkelas, $var_idsiswa)
    {
        $data = array(
            'title'                 => "Tambah Siswa",
            'tampil_siswa_id'       => $this->M_frontend->M_tampil_siswa_id($var_idkelas, $var_idsiswa)
        );

        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_siswa/V_edit', $data);
        $this->load->view('template/admin/footer');
    }

    function aksi_add_siswa()
    {
        $id = $this->input->post('f_idkelas');
        $this->M_frontend->M_tambah_siswa();

        // redirect('C_frontend/data_siswa/'. $id); // before

        $url = 'C_frontend/data_siswa/' . $id;
        redirect($url);
        // arah controller -> function | controller/function/id
    }

    // Sertakan parameter kelas dan siswa saat melakukan edit dan hapus data 
    function aksi_edit_siswa()
    {
        $var_idkelas = $this->input->post('f_idkelas');
        $var_idsiswa = $this->input->post('f_idsiswa');

        $this->M_frontend->M_edit_siswa($var_idkelas, $var_idsiswa);

        $url = 'C_frontend/data_siswa/' . $var_idkelas;
        redirect($url);
    }

    function hapus_siswa($var_idkelas, $var_idsiswa)
    {
        $this->M_frontend->M_hapus_siswa($var_idkelas, $var_idsiswa);

        // sertakan id untuk menghapus
        redirect('C_frontend/data_siswa/' . $var_idkelas);
    }






    // ==================================================================================================================
    // LINK TUGAS
    // ==================================================================================================================

    function link_tugas()
    {
        $data = array(
            'title'       => "Link Tugas",
            'tampil_link' => $this->M_frontend->M_tampil_link()
        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_link/V_link', $data);
        $this->load->view('template/admin/footer');
    }

    function tambah_tugas()
    {
        $data = array(
            'title'       => "Tambah Tugas"
        );

        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_link/V_tambah', $data);
        $this->load->view('template/admin/footer');
    }

    function edit_link_tugas($id)
    {
        $data = array(
            'title'             => "Edit Link",
            'tampil_link_id'    => $this->M_frontend->M_tampil_link_id($id)
        );
        $this->load->view('template/admin/header', $data);
        $this->load->view('Frontend/frontend_link/V_edit', $data);
        $this->load->view('template/admin/footer');
    }

    function aksi_add_tugas()
    {
        $this->M_frontend->M_tambah_link();

        redirect('C_frontend/link_tugas');
    }

    function aksi_edit_tugas()
    {
        $this->M_frontend->M_edit_link();
        redirect('C_frontend/link_tugas');
    }

    function hapus_link($id)
    {
        $this->M_frontend->M_hapus_link($id);

        redirect('C_frontend/link_tugas');
    }
}
    
    /* End of file C_frontend.php */
