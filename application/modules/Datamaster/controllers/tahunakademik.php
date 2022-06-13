<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tahunakademik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tahunakademik_m');
    }
    public $titles = 'Tahun Akademik';
    public $vn = 'tahunakademik';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->tahunakademik_m->getAllData();

        $this->template->load('template', $this->vn . '/list', $data);
    }


    function add()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $this->template->load('template', $this->vn . '/add', $data);
    }

    function addAction()
    {
        $this->tahunakademik_m->save();
        redirect('datamaster/' . $this->vn);
    }

    function edit()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Edit Data " . $this->titles;
        $id = $this->uri->segment(4);
        $data['row'] = $this->tahunakademik_m->getDataById($id);
        $this->template->load('template', $this->vn . '/edit', $data);
    }

    function editAction()
    {
        $id = $this->uri->segment(4);
        $this->tahunakademik_m->update($id);
        redirect('datamaster/' . $this->vn);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->tahunakademik_m->delete($id);
        redirect('datamaster/' . $this->vn);
    }
}

/* End of file */
