<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_frontend extends CI_Model
{

    // ==================================================================================================================
    // Kelas Berdasarkan id user (update v2)
    // ==================================================================================================================


    function M_tampil_kelas()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $sql = "SELECT id_kelas, nama_kelas, id_profile FROM kelas WHERE kelas.id_profile = '$sessId' ORDER BY id_kelas DESC";
        $query = $this->db->query($sql);

        return $query;
    }

    function M_tampil_kelas_id($id)
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');
        $where = array(
            'id_kelas'      => $id,
            'id_profile'    => $sessId
        );

        $query = $this->db->get_where('kelas', $where);
        return $query->row_array();
    }

    function M_tambah_kelas()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $data = array(
            'nama_kelas'  => $this->input->post('f_kelas'),
            'id_profile'  => $sessId
        );

        $this->db->insert('kelas', $data);
        // print_r($data);
    }

    function M_edit_kelas()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $where = array(
            'id_kelas'      => $this->input->post('f_idKelas'),
            'id_profile'    => $sessId
        );

        $data = array(
            'nama_kelas'     => $this->input->post('f_kelas'),
            'id_kelas'       => $this->input->post('f_idKelas'),
        );

        $this->db->where($where);
        $this->db->update('kelas', $data);
    }

    function M_hapus_kelas($id)
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $where = array(
            'id_kelas'      => $id,
            'id_profile'    => $sessId
        );

        $this->db->where($where);
        $this->db->delete('kelas');
    }

    // ==================================================================================================================
    // JURNAL Berdasarkan id user (update v2)
    // ==================================================================================================================
    // Test detail

    function M_detail_jurnal($id_jurnal, $id_kelas)
    {
        $sessId = $this->session->userdata('sess_id');

        $where = array(
            'id_jurnal'                 => $id_jurnal,
            'jurnal.id_kelas'           => $id_kelas,
            'jurnal.id_profile'         => $sessId
        );

        $this->db->select('jurnal.*, kelas.*');
        $this->db->from('jurnal');
        $this->db->join('kelas', 'jurnal.id_kelas = kelas.id_kelas');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->row_array();
    }

    // Tampil table jurnal
    function M_tampil_jurnal()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');
        // $sql = "SELECT id_jurnal, jam, kegiatan, tugas, catatan, tgl_jurnal, sakit, ijin, alpa, id_profile, id_kelas, id_siswa
        // FROM jurnal WHERE jurnal.id_profile = '$sessId'
        // ORDER BY id_jurnal DESC ";

        // $query = $this->db->query($sql);
        // return $query;
        $sql = "SELECT id_jurnal,jurnal.id_kelas, jam, kegiatan, tugas, id_siswa, catatan, tgl_jurnal, sakit, ijin, alpa, nama_kelas FROM jurnal JOIN kelas ON jurnal.id_kelas = kelas.id_kelas WHERE jurnal.id_profile = '$sessId' ORDER BY id_jurnal";
        return $this->db->query($sql);
    }

    // Tampil jurnal id
    function M_tampil_jurnal_id($id)
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');
        $where = array(
            'id_jurnal'     => $id,
            'id_profile'    => $sessId
        );

        $query = $this->db->get_where('jurnal', $where);
        return $query->row_array();
    }

    function M_tambah_jurnal()
    {

        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');
        // Konfersi datepicker untuk input form tanggal, menambahkan waktu input 
        $date_picker = $this->input->post('f_tanggal') . date('H:i:s');
        $tgl_baru = date('Y-m-d H:i:s', strtotime($date_picker));
        // Implode (menggabungkan kalimat ke 1 kolom)
        $jam_dari = $this->input->post('f_jamdari');
        $jam_ke = $this->input->post('f_jamke');
        $gabung = array($jam_dari, $jam_ke);
        $jam = implode(" - ", $gabung);


        $data = array(
            // id_kelas = ambil data dari table kelas
            'id_kelas'  => $this->input->post('f_getkelas'),
            // ===
            'jam'    => $jam,
            'kegiatan'  => $this->input->post('f_kegiatan'),
            'tugas'     => $this->input->post('f_tugas'),
            'catatan'   => $this->input->post('f_catatan'),
            'tgl_jurnal' => $tgl_baru,
            'id_profile' => $sessId
            // DIAMBIL DARI DATA SISWA
            // 'sakit'
            // 'ijin'
            // 'alpha'
        );

        $this->db->insert('jurnal', $data);
        // print_r($data);
    }

    function M_edit_jurnal()
    {
        // Konfersi datepicker untuk input form tanggal, menambahkan waktu input 
        $date_picker = $this->input->post('f_tanggal') . date('H:i:s');
        $tgl_baru = date('Y-m-d H:i:s', strtotime($date_picker));

        $data = array(
            // id_kelas = ambil data dari table kelas
            'id_kelas'  => $this->input->post('f_getkelas'),
            // ===
            'jam'    => $this->input->post('f_jam'),
            'kegiatan'  => $this->input->post('f_kegiatan'),
            'tugas'     => $this->input->post('f_tugas'),
            // 'data_siswa'
            'catatan'   => $this->input->post('f_catatan'),
            'tgl_jurnal' => $tgl_baru
            // DIAMBIL DARI DATA SISWA
            // 'sakit'
            // 'ijin'
            // 'alpha'
        );

        $this->db->where('id_jurnal', $this->input->post('id'));
        $this->db->update('jurnal', $data);
    }

    function M_hapus_jurnal($id)
    {
        $this->db->where('id_jurnal', $id);
        $this->db->delete('jurnal');
    }

    // ==================================================================================================================
    // LINK Berdasarkan id user (update v2)
    // ==================================================================================================================

    function M_tampil_link()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $sql = "SELECT id_link, nama_tugas, link_tugas, id_profile FROM link_tugas 
        WHERE link_tugas.id_profile = '$sessId' 
        ORDER BY id_link DESC";

        $query = $this->db->query($sql);

        return $query;
    }

    function M_tampil_link_id($id)
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');
        $where = array(
            'id_link'       => $id,
            'id_profile'    => $sessId
        );

        $query = $this->db->get_where('link_tugas', $where);
        return $query->row_array();
    }

    function M_tambah_link()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $data = array(

            'nama_tugas'     => $this->input->post('f_nama'),
            'link_tugas'     => $this->input->post('f_link'),
            'id_profile'     => $sessId
        );

        $this->db->insert('link_tugas', $data);
        // print_r($data);
    }

    function M_edit_link()
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $where = array(
            'id_link'   => $this->input->post('f_idlink'),
            'id_profile'     => $sessId
        );

        $data = array(

            'nama_tugas'     => $this->input->post('f_nama'),
            'link_tugas'     => $this->input->post('f_link')
        );

        $this->db->where($where);
        $this->db->update('link_tugas', $data);
    }

    function M_hapus_link($id)
    {
        // Menampilkan kelas berdasarkan id profil user yg login, misal hakam yang login maka akan menampilkan data dari hakam 
        $sessId = $this->session->userdata('sess_id');

        $where = array(
            'id_link'       => $id,
            'id_profile'    => $sessId
        );

        $this->db->where($where);
        $this->db->delete('link_tugas');
    }

    // ==================================================================================================================
    // SISWA Berdasarkan id user (update v2)
    // ==================================================================================================================

    //Ambil data siswa berdasarkan kelas 
    function M_datasiswa_by_kelas($id)
    {
        $sql = "SELECT * FROM siswa WHERE id_kelas = '$id'";
        $query = $this->db->query($sql);
        return $query;
    }

    function M_tampil_siswa_id($var_idkelas, $var_idsiswa)
    {

        $where = array(
            'id_kelas' => $var_idkelas,
            'id_siswa' => $var_idsiswa
        );

        $query = $this->db->get_where('siswa', $where);
        return $query->row_array();
    }

    function M_tambah_siswa()
    {

        $data = array(
            'id_kelas' => $this->input->post('f_idkelas'),
            'nama_siswa'  => $this->input->post('f_nama_siswa')
        );

        $this->db->insert('siswa', $data);
    }

    function M_edit_siswa($var_idkelas, $var_idsiswa)
    {

        $where = array(
            'id_kelas' => $var_idkelas,
            'id_siswa' => $var_idsiswa
        );

        $data = array(
            'nama_siswa'     => $this->input->post('f_nama')
        );

        $this->db->where($where);
        $this->db->update('siswa', $data);
    }

    function M_hapus_siswa($var_idkelas, $var_idsiswa)
    {

        $where = array(
            'id_kelas' => $var_idkelas,
            'id_siswa' => $var_idsiswa
        );

        $this->db->where($where);
        $this->db->delete('siswa');
    }
}
    
    /* End of file M_frontend.php */
