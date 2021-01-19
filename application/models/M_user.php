<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    // Model login
    function M_aksi_login($c_notelp, $c_password)
    {
        $this->db->where('no_telepon', $c_notelp);
        $this->db->where('password', $c_password);
        // Get data dari table user
        $result = $this->db->get('users');
        return $result;
    }

    function M_register_user()
    {
        $data = array(
            'nama_user'    => $this->input->post('f_nama'),
            'no_telepon'   => $this->input->post('f_notelp'),
            'email'        => $this->input->post('f_email'),
            'instansi'     => $this->input->post('f_instansi'),
            'password'     => md5($this->input->post('f_password'))
        );

        $this->db->insert('users', $data);
    }
}
    
    /* End of file M_user.php */
