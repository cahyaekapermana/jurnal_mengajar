<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_frontend extends CI_Model
{
    // Tampil table kelas
    function M_tampil_kelas()
    {
        $sql = "SELECT id_kelas, id_profile, nama_kelas FROM kelas ORDER BY id_kelas DESC";
        return $this->db->query($sql);
    }

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
}
    
    /* End of file M_frontend.php */
