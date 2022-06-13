<?php

defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public $vn = 'dashboard';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('grafik_m', 'primaryModel');
    }


    public function index()
    {
        $data['title'] = "Selamat Datang";

        $data['totalSiswa'] = $this->primaryModel->totalSiswa();
        $data['totalMapel'] = $this->primaryModel->totalMapel();
        $data['totalGuru'] = $this->primaryModel->totalGuru();
        $data['totalJadwal'] = $this->primaryModel->totalJadwal();
        // $data['row'] = $this->primaryModel->getAllData();
        $this->template->load('template', $this->vn . '/index', $data);
    }



    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('grafik_m');
    // }

    // function index()
    // {
    //     $data['pageTitle'] = "Grafik Batang LPPM UNISM";
    //     $data = array(
    //         'suara' => $this->grafik_m->get_row(),
    //         'suara1' => $this->grafik_m->get_row1(),

    //     );
    //     $this->template->load('template', $this->vn . '/index', $data);
    // }
}
