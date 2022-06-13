<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_m');
    }

    public function index()
    {
        $this->load->view('login/list');
    }

    public function logon()
    {
        $nisn = $this->input->post('nisn', TRUE);
        $password = $this->input->post('password', TRUE);

        if (!empty($this->Login_m->getByNisn($nisn))) :
            $user = $this->Login_m->getByNisn($nisn);
        else :
            $user = $this->Login_m->getByUser($nisn);
        endif;
        if ($user) :
            if ($user->isActive == 1) :
                if (password_verify($password, $user->password)) :
                    if (!empty($user->nisn)) :
                        $data = [
                            'nisn' => $user->nisn,
                            'namaSiswa' => $user->nama,
                            'roleId' => $user->roleId,
                        ];
                    elseif (!empty($user->nisn)) :
                        $data = [
                            'nim' => $user->nim,
                            'roleId' => $user->roleId,
                        ];
                    elseif (!empty($user->username)) :
                        $data = [
                            'idUser' => $user->idUser,
                            'username' => $user->username,
                            'roleId' => $user->roleId,
                        ];
                    endif;
                    $this->session->set_userdata($data);
                    if ($user->roleId == 1) :
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang, ' . $user->nama . '</div>');
                        redirect('Dashboard'); //Superadmin
                    elseif ($user->roleId == 2) :
                        redirect('admin'); //Guru
                    else :
                        redirect('Home/Dashboard'); //Siswa
                    endif;
                else :
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Login!, Username atau Password Salah!</div>');
                    redirect('Auth/login');
                endif;
            else :
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Login!, Akun Anda Belum Aktif!</div>');
                redirect('Auth/login');
            endif;
        else :
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Login!, Akun Tidak Ditemukan!</div>');
            redirect('Auth/login');
        endif;
    }
}

/* End of file Login.php */
