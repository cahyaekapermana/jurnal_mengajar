<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    // Model login
    // NEW VERSION ($key artinya parameter kosong, mewakili parameter $this->nama_model->function_model(parameter) di controller)
    function getDataLogin($key)
    {
        return $this->db->get_where('users', $key);
    }

    // OLD VERSION LOGIN METHOD
    // function M_aksi_login($c_notelp, $c_password)
    // {
    //     $this->db->where('no_telepon', $c_notelp);
    //     $this->db->where('password', $c_password);
    //     // Get data dari table user
    //     $result = $this->db->get('users');
    //     return $result;
    // }

    function M_register_user()
    {
        $data = array(
            'nama_user'         => $this->input->post('f_nama'),
            'no_telepon'        => $this->input->post('f_notelp'),
            'email'             => $this->input->post('f_email'),
            'instansi'          => $this->input->post('f_instansi'),
            // Password Bckript
            'password'          => password_hash($this->input->post('f_password'), PASSWORD_BCRYPT),
            'konf_password'     => password_hash($this->input->post('f_konfpassword'), PASSWORD_BCRYPT)

        );

        $this->db->insert('users', $data);
    }
}
    
    /* End of file M_user.php */
