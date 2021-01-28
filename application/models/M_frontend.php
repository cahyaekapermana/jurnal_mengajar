<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_frontend extends CI_Model
{
    // ==================================================================================================================
    // Kelas
    // ==================================================================================================================

    // Tampil table kelas
    function M_tampil_kelas()
    {
        $sql = "SELECT id_kelas, id_profile, nama_kelas FROM kelas ORDER BY id_kelas DESC";
        return $this->db->query($sql);
    }

    function M_tampil_kelas_id($id)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
    }

    function M_tambah_kelas()
    {
        $data = array(
            'nama_kelas'  => $this->input->post('f_kelas')
        );

        $this->db->insert('kelas', $data);
        // print_r($data);
    }

    function M_edit_kelas()
    {

        $data = array(
            'nama_kelas'     => $this->input->post('f_kelas')
        );

        $this->db->where('id_kelas', $this->input->post('f_idKelas'));
        $this->db->update('kelas', $data);
    }

    function M_hapus_kelas($id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
    }

    // ==================================================================================================================
    // JURNAL
    // ==================================================================================================================


    // Tampil table jurnal
    function M_tampil_jurnal()
    {
        $sql = "SELECT id_jurnal,jurnal.id_kelas, jam, kegiatan, tugas, data_siswa, catatan, tgl_jurnal, sakit, ijin, alpa, nama_kelas FROM jurnal JOIN kelas ON jurnal.id_kelas = kelas.id_kelas ORDER BY id_jurnal";
        return $this->db->query($sql);
    }

    // Tampil jurnal id
    function M_tampil_jurnal_id($id)
    {
        return $this->db->get_where('jurnal', ['id_jurnal' => $id])->row_array();
    }

    function M_tambah_jurnal()
    {
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
            // 'data_siswa'
            'catatan'   => $this->input->post('f_catatan'),
            'tgl_jurnal' => $tgl_baru
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
    // LINK
    // ==================================================================================================================

    function M_tampil_link()
    {
        $sql = "SELECT id_link, id_profile, nama_tugas, link_tugas FROM link_tugas ORDER BY id_link DESC";
        return $this->db->query($sql);
    }

    function M_tampil_link_id($id)
    {
        return $this->db->get_where('link_tugas', ['id_link' => $id])->row_array();
    }

    function M_tambah_link()
    {

        $data = array(

            'nama_tugas'     => $this->input->post('f_nama'),
            'link_tugas'     => $this->input->post('f_link'),
        );

        $this->db->insert('link_tugas', $data);
        // print_r($data);
    }

    function M_edit_link()
    {

        $data = array(

            'nama_tugas'     => $this->input->post('f_nama'),
            'link_tugas'     => $this->input->post('f_link')
        );

        $this->db->where('id_link', $this->input->post('f_idlink'));
        $this->db->update('link_tugas', $data);
    }

    function M_hapus_link($id)
    {
        $this->db->where('id_link', $id);
        $this->db->delete('link_tugas');
    }

    // ==================================================================================================================
    // SISWA
    // ==================================================================================================================

    function M_tampil_siswa()
    {
        $sql = "SELECT id_siswa, id_kelas, nama_siswa FROM siswa ORDER BY id_siswa DESC";
        return $this->db->query($sql);
    }

    function M_tampil_siswa_id($id)
    {
        return $this->db->get_where('siswa', ['id_siswa' => $id])->row_array();
    }

    function M_tambah_siswa()
    {

        $data = array(

            'nama_siswa'     => $this->input->post('f_nama_siswa')
        );

        $this->db->insert('siswa', $data);
    }

    function M_edit_siswa()
    {

        $data = array(
            'nama_siswa'     => $this->input->post('f_nama')
        );

        $this->db->where('id_siswa', $this->input->post('f_idSiswa'));
        $this->db->update('siswa', $data);
    }

    function M_hapus_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('siswa');
    }
}
    
    /* End of file M_frontend.php */
