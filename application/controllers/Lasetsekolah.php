<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lasetsekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lasetsekolah_m');
        $this->load->library('form_validation');
    }

    public $titles = 'Aset Barang';
    public $vn = 'lasetsekolah';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->Lasetsekolah_m->getAllData();
        $data['guru'] = $this->Lasetsekolah_m->getKepsek();
        // $data['data'] = $this->Lasetsekolah_m->getaset();
        $this->load->library('Mypdf');
        $this->mypdf->generate('lasetsekolah/index', $data);
    }


    function add()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $data['data'] = $this->Lasetsekolah_m->getAset();
        $this->template->load('template', $this->vn . '/add', $data);
    }

    function detail()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Detail Data " . $this->titles;
        $id = $this->uri->segment(4);
        // $data['row'] = $this->Lasetsekolah_m->getBarang();
        $data['data'] = $this->Lasetsekolah_m->getDataById($id);
        $this->template->load('template', $this->vn . '/detail', $data);
    }

    function addAction()
    {
        $this->Lasetsekolah_m->save();
        redirect('datamaster/' . $this->vn);
    }

    function edit()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Edit Data " . $this->titles;
        $id = $this->uri->segment(4);
        // $data['row'] = $this->Lasetsekolah_m->getBarang();
        $data['data'] = $this->Lasetsekolah_m->getAset();
        $data['row'] = $this->Lasetsekolah_m->getDataById($id);
        $this->template->load('template', $this->vn . '/edit', $data);
    }

    function editAction()
    {
        $id = $this->uri->segment(4);
        $this->Lasetsekolah_m->update($id);
        redirect('datamaster/' . $this->vn);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->Lasetsekolah_m->delete($id);
        redirect('datamaster/' . $this->vn);
    }

    function _uploadFoto()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
        // proses upload
        $this->upload->do_upload('images');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
}
