<?php

defined('BASEPATH') or exit('No direct script access allowed');

class aset_m extends CI_Model
{

    public $namaTable = 'aset';
    public $pk = 'idBarang';

    public function getAllData()
    {
        $this->db->select('aset.*, kategori_barang.kategoriBarang as kategoriBarang');
        $this->db->join('kategori_barang', 'kategori_barang.idKategoriBarang = aset.idKategoriBarang', 'left');
        return $this->db->get($this->namaTable)->result();
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

    public function save($foto)
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
            'foto' => $foto,
            'keterangan' => htmlspecialchars($this->input->post('keterangan', TRUE))

        ];
        $this->db->insert($this->namaTable, $object);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
    }

    function update($Value, $foto)
    {
        $object = [
            'kodeBarang' => htmlspecialchars($this->input->post('kodeBarang', TRUE)),
            'namaBarang' => htmlspecialchars($this->input->post('namaBarang', TRUE)),
            'idKategoriBarang' => htmlspecialchars($this->input->post('idKategoriBarang', TRUE)),
            'jumlahBarang' => htmlspecialchars($this->input->post('jumlahBarang', TRUE)),
            'tanggalTerima' => htmlspecialchars($this->input->post('tanggalTerima', TRUE)),
            'sumberDana' => htmlspecialchars($this->input->post('sumberDana', TRUE)),
            'kondisi' => htmlspecialchars($this->input->post('kondisi', TRUE)),
            'foto' => $foto,
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
}

/* End of file */
