<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_m extends CI_Model
{
    public function view()
    {

        return $this->db->get('pegawai')->result();
    }

    function getDataAll()
    {
        $this->db->where('nik', $this->session->userdata('nik'));
        return $this->db->get('pegawai')->row();
    }

    //fungsi untuk upload data
    public function upload_file($filename)
    {
        $this->load->library('upload');
        $config['upload_path'] = './assets/excel/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size']  = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;

        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function insert_multiple($data)
    {
        $this->db->insert_batch('pegawai', $data);
    }


    function save()
    {

        $object = [
            'idPegawai' => uniqid(),
            'nik' => htmlspecialchars($this->input->post('nik', TRUE)),
            'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
            'nidn' => htmlspecialchars($this->input->post('nidn', TRUE)),
            'homebase' => htmlspecialchars($this->input->post('homebase', TRUE)),
            'penempatan' => htmlspecialchars($this->input->post('penempatan', TRUE)),
            'roleId' => '3',
            'isActive' => '1',
            'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
            'time' => time(),
            'validate' => '0'
        ];

        $this->db->insert('pegawai', $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun telah dibuat!</div>');
    }

    function edit()
    {
        $object = [

            'nik' => htmlspecialchars($this->input->post('nik', TRUE)),
            'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
            'nidn' => htmlspecialchars($this->input->post('nidn', TRUE)),
            'homebase' => htmlspecialchars($this->input->post('homebase', TRUE)),
            'penempatan' => htmlspecialchars($this->input->post('penempatan', TRUE)),

            'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),

            'validate' => '1'
        ];

        $this->db->where('nik', $this->session->userdata('nik'));
        $this->db->update('pegawai', $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun telah dibuat!</div>');
    }

    function getDataById($Value)
    {
        $this->db->where('idPegawai', $Value);
        return $this->db->get('pegawai')->row();
    }
}

/* End of file Pegawai_m.php */
