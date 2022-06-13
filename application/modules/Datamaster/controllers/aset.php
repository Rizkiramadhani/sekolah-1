<?php

defined('BASEPATH') or exit('No direct script access allowed');

class aset extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('aset_m');
        $this->load->library('form_validation');
    }

    public $titles = 'Aset Barang';
    public $vn = 'aset';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->aset_m->getAllData();
        // $data['data'] = $this->aset_m->getaset();

        $this->template->load('template', $this->vn . '/list', $data);
    }


    function add()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $data['data'] = $this->aset_m->getAset();
        $this->template->load('template', $this->vn . '/add', $data);
    }

    function detail()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Detail Data " . $this->titles;
        $id = $this->uri->segment(4);
        // $data['row'] = $this->aset_m->getBarang();
        $data['data'] = $this->aset_m->getDataById($id);
        $this->template->load('template', $this->vn . '/detail', $data);
    }

    function addAction()
    {
        $this->aset_m->save($this->upload_foto());
        redirect('datamaster/' . $this->vn);
    }

    function edit()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Edit Data " . $this->titles;
        $id = $this->uri->segment(4);
        // $data['row'] = $this->aset_m->getBarang();
        $data['data'] = $this->aset_m->getAset();
        $data['row'] = $this->aset_m->getDataById($id);
        $this->template->load('template', $this->vn . '/edit', $data);
    }

    function editAction()
    {
        $id = $this->uri->segment(4);
        $this->aset_m->update($id, $this->upload_foto());
        redirect('datamaster/' . $this->vn);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->aset_m->delete($id);
        redirect('datamaster/' . $this->vn);
    }

    function upload_foto()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
        // proses upload
        $this->upload->do_upload('foto');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    function update_foto()
    {
        $post = $this->input->post();


        $this->kodeBarang = $post["kodeBarang"];
        $this->namaBarang = $post["namaBarang"];
        $this->idKategoriBarang = $post["idKategoriBarang"];
        $this->jumlahBarang = $post["jumlahBarang"];
        $this->tanggalTerima = $post["tanggalTerima"];
        $this->sumberDana = $post["sumberDana"];
        $this->kondisi = $post["kondisi"];

        if (!empty($_FILES["foto"]["namaBarang"])) {
            $this->foto = $this->upload_foto();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->keterangan = $post["keterangan"];

        $this->db->update('aset', array('kodeBarang' => $post['kodeBarang']));
        redirect('datamaster/' . $this->vn);
    }
}

/* End of file */
