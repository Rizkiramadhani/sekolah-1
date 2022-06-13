<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Eraport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Eraport_m');
        $this->load->library('form_validation');
    }

    public $titles = 'Siswa';
    public $vn = 'siswa';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Detail Data " . $this->titles;
        $id = $this->uri->segment(4);
        $data['row'] = $this->Eraport_m->getDataById($id);

        $this->load->library('Mypdf');
        $this->mypdf->generateraporcover('eraport/cover', $data);
    }
}
