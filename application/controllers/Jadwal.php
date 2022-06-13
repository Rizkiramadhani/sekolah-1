<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->db->where('nisn', $this->session->userdata('nisn'));
        $cek = $this->db->get('siswa')->row();
        if ($cek->isActive == '0') :
            redirect('Home/Pengaturan/setup');
        else :
            $data['pageTitle'] = "Dashboard";
            $data['row'] = $cek;
            $data['mapel'] = $this->Jadwal_m->getMapel();
            $data['data'] = $this->Jadwal_m->getAllData();
            $this->template->load("home", "jadwalsiswa/list", $data);
        endif;
    }

    function cetak()
    {
        $tahun_akademik = $_GET['tahun_akademik'];
        $kelas = $_GET['kelas'];
        $this->db->where('jadwal_pelajaran.kodeTahun', $tahun_akademik);
        $this->db->where('jadwal_pelajaran.kodeKelas', $kelas);
        $this->db->join('tahun_akademik', 'tahun_akademik.kodeTahun = jadwal_pelajaran.kodeTahun', 'left');

        $this->db->join('kelas', 'kelas.kodeKelas = jadwal_pelajaran.kodeKelas', 'left');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.kodeMapel = jadwal_pelajaran.kodeMapel', 'left');
        $this->db->join('guru', 'guru.nip = mata_pelajaran.nip', 'left');
        $data = $this->db->get('jadwal_pelajaran')->result();


        $this->load->library('Mypdf');
        $this->mypdf->generatejadwal("home", "jadwalsiswa/cetakjadwal/list", $data);
    }
}

/* End of file Dashboard.php */
