<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    private $filename = "Import_data";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_m', 'primaryModel');
    }
    public $titles = 'Data Pegawai';
    public $vn = 'pegawai';

    public function index()
    {
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Data " . $this->titles;
        $data['data'] = $this->primaryModel->view();


        $this->template->load('template', $this->vn . '/list', $data);
    }
    public function Form()
    {
        $data = array(); // Buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di primaryModel.php
            $upload = $this->primaryModel->upload_file($this->filename);

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('assets/excel/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $this->template->load('template', $this->vn . '/form', $data);
    }

    public function import()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('assets/excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'idPegawai' => uniqid(),
                    'password' => password_hash($row['B'], PASSWORD_DEFAULT),
                    'time' => time(),
                    'roleId' => '3',
                    'isActive' => '1',
                    'nama' => $row['A'],
                    'nik' => $row['B'],
                    'nidn' => $row['C'],
                    'homebase' => $row['D'],
                    'penempatan' => $row['E'],
                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->primaryModel->insert_multiple($data);

        redirect("Import/Pegawai"); // Redirect ke halaman awal (ke controller fungsi index)
    }

    function add()
    {
        $data['pegawai'] = $this->primaryModel->view();
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $this->template->load('template', $this->vn . '/add', $data);
    }

    function addAction()
    {
        $this->primaryModel->save();
        redirect('Import/' . $this->vn);
    }

    function edit()
    {
        $data['pegawai'] = $this->primaryModel->view();
        $data['title'] = $this->titles;
        $data['pageTitle'] = "Tambah Data " . $this->titles;
        $id = $this->uri->segment(4);

        $data['row'] = $this->primaryModel->getDataAll($id);
        $this->template->load('template', $this->vn . '/edit', $data);
    }

    function editAction()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->setup($id);
        redirect('Import/' . $this->vn);
    }

    function delete()
    {
        $id = $this->uri->segment(4);
        $this->primaryModel->delete($id);
        redirect('Import/' . $this->vn);
    }
}

/* End of file Rt.php */
