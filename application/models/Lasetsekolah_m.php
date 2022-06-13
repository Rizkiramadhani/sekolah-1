<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lasetsekolah_m extends CI_Model
{
    public $namaTable = 'aset';
    public $pk = 'idBarang';

    public function getAllData()
    {
        $this->db->select('aset.*, kategori_barang.kategoriBarang as kategoriBarang');
        $this->db->join('kategori_barang', 'kategori_barang.idKategoriBarang = aset.idKategoriBarang', 'left');
        return $this->db->get($this->namaTable)->result();
    }
    public function getKepsek()
    {
        $this->db->where('tugasTambahan', 'Kepala Sekolah');

        return $this->db->get('guru')->row();
    }

    public function getAset()
    {
        return $this->db->get('kategori_barang')->result();
    }



    public function getDataById($Value)
    {
        $this->db->select('aset.*, kategori_barang.kategoriBarang as kategoriBarang');
        $this->db->join('kategori_barang', 'kategori_barang.idKategoriBarang = aset.idKategoriBarang', 'left');
        $this->db->where($this->pk, $Value);
        return $this->db->get($this->namaTable)->row();
    }

    public function save()
    {
        $object = [
            'idBarang' => uniqid(),
            'kodeBarang' => htmlspecialchars($this->input->post('kodeBarang', TRUE)),
            'namaBarang' => htmlspecialchars($this->input->post('namaBarang', TRUE)),
            'idKategoriBarang' => htmlspecialchars($this->input->post('idKategoriBarang', TRUE)),
            'jumlahBarang' => htmlspecialchars($this->input->post('jumlahBarang', TRUE)),
            'tanggalTerima' => htmlspecialchars($this->input->post('tanggalTerima', TRUE)),
            'sumberDana' => htmlspecialchars($this->input->post('sumberDana', TRUE)),
            'kondisi' => htmlspecialchars($this->input->post('kondisi', TRUE)),
            'foto' => $this->_uploadImage(),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', TRUE))

        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function update($Value)
    {
        $object = [

            'idBarang' => uniqid(),
            'kodeBarang' => htmlspecialchars($this->input->post('kodeBarang', TRUE)),
            'namaBarang' => htmlspecialchars($this->input->post('namaBarang', TRUE)),
            'idKategoriBarang' => htmlspecialchars($this->input->post('idKategoriBarang', TRUE)),
            'jumlahBarang' => htmlspecialchars($this->input->post('jumlahBarang', TRUE)),
            'tanggalTerima' => htmlspecialchars($this->input->post('tanggalTerima', TRUE)),
            'sumberDana' => htmlspecialchars($this->input->post('sumberDana', TRUE)),
            'kondisi' => htmlspecialchars($this->input->post('kondisi', TRUE)),
            'foto' => $this->_uploadImage(),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', TRUE))

        ];


        $this->db->where($this->pk, $Value);
        $this->db->update($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah</div>');
    }

    function delete($Value)
    {
        $this->db->where($this->pk, $Value);
        $this->db->delete($this->namaTable);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus</div>');
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->idBarang;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
