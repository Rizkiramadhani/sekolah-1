<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function index()
    {
        $this->eksekusi();
    }

    public function eksekusi()
    {
        $data = [
            'nim',
            'nik'
        ];

        $this->session->unset_userdata($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Anda Sudah Berhasil Logout </div>');
        redirect('Auth/Login');
    }
}

/* End of file Logout.php */
