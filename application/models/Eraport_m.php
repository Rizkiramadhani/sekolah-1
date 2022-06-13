<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Eraport_m extends CI_Model
{

    public $namaTable = 'siswa';
    public $pk = 'idSiswa';

    public function getAllData()
    {
        $this->db->select('siswa.*, kelas.namaKelas as namaKelas');
        $this->db->join('kelas', 'kelas.idKelas = siswa.idKelas', 'left');

        return $this->db->get($this->namaTable)->result();
    }

    public function getKelas()
    {
        return $this->db->get('kelas')->result();
    }

    public function getDataById($Value)
    {
        $this->db->select('siswa.*, kelas.namaKelas as namaKelas');
        $this->db->join('kelas', 'kelas.idKelas = siswa.idKelas', 'left');
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }
}
