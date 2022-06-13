<?php

defined('BASEPATH') or exit('No direct script access allowed');

class users_m extends CI_Model
{

    public $namaTable = 'user';
    public $pk = 'idUser';

    function getAllData()
    {
        $this->db->join('role', 'role.roleId = user.roleId', 'left');

        return $this->db->get($this->namaTable)->result();
    }

    function getDataById($Value)
    {
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }

    function kategori()
    {
        $this->db->where('ket', '0');
        return $this->db->get('kategori')->result();
    }

    function save()
    {
        $object = [
            'idUser' => uniqid(),
            'nama' => $this->input->post('nama', TRUE),
            'username' => $this->input->post('username', TRUE),
            // 'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            // 'image' => 'default.jpg',
            'roleId' => '1',
            'isActive' => $this->input->post('isActive', TRUE),
            'dateCreated' => time()

        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function update($Value)
    {
        $object = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            // 'image' => 'default.jpg',
            'isActive' => $this->input->post('isActive'),
        ];
        $this->db->where($this->pk, $Value);
        $this->db->update($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Rubah</div>');
    }

    function delete($Value)
    {
        $this->db->where($this->pk, $Value);
        $this->db->delete($this->namaTable);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus</div>');
    }
}

/* End of file */
