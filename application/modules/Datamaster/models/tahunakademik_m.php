<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tahunakademik_m extends CI_Model
{

    public $namaTable = 'tahun_akademik';
    public $pk = 'kodeTahun';

    function getAllData()
    {
        return $this->db->get($this->namaTable)->result();
    }

    function getDataById($Value)
    {
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }

    function save()
    {
        $object = [

            'kodeTahun' => $this->input->post('kodeTahun', TRUE),
            'namaTahun' => $this->input->post('namaTahun', TRUE),
            'keterangan' => $this->input->post('keterangan', TRUE),
            'isActive' => $this->input->post('isActive', TRUE)
        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function update($Value)
    {
        $object = [
            'kodeTahun' => $this->input->post('kodeTahun', TRUE),
            'namaTahun' => $this->input->post('namaTahun', TRUE),
            'keterangan' => $this->input->post('keterangan', TRUE),
            'isActive' => $this->input->post('isActive', TRUE)
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
