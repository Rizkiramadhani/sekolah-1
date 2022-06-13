<?php

defined('BASEPATH') or exit('No direct script access allowed');

class grafik_m extends CI_Model
{
    public $namaTable = 'user';
    public $pk = 'idUser';

    public function getAllData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $user = $this->db->get('user')->row();
    }

    public function totalSiswa()
    {
        $query = $this->db->get('siswa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalMapel()
    {
        $query = $this->db->get('mata_pelajaran');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function totalGuru()
    {
        $query = $this->db->get('guru');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function totalJadwal()
    {
        $query = $this->db->get('jadwal_pelajaran');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
