<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }


    public function index()
    {
		show_404();
    }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
       

        //ini untuk cek apakah form validasi lagi berjalan atau tidak jika tidak arahkan ke view login
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_proses();
        }
    }

    private function _proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //cari data di database users patokannya yang diisi oleh form di view username
        $user = $this->db->get_where('users', ['username' => $username,'password' => $password])->row_array();
        //cek user di database dulu
        if ($user) {
            //jika user ada maka cek lagi apakah user aktif atau tidak
            if ($user['is_active'] == 1) {
                ///jika user aktif maka cek passwordnya benar atau tidak
                if (password_verify($password, $user['password'])) {
                    //jika password benar maka kirimkan data session yang berbentuk array $data di bawah ke halaman tujuan dashboard
                    $data = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'status' => "login"
                    ];
                    //ini cara kirimnya
                    $this->session->set_userdata($data);
                    redirect('dashboard/admin');
                } else {
                    //jika tidak kirimkan pesan ini kalau passwordnya salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah </div>');
                    redirect('auth');
                }
            } else {
                //jika tidak kirimkan pasan ini kalau username tidak aktif
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username anda tidak aktif silahkan hubngi admin </div>');
                redirect('auth');
            }
        } else {
            //jika tidak kirimkan username tidak ada di database
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar </div>');
            redirect('auth');
        }
    }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth/login'));
	}
    // public function logout()
    // {
    //     $this->session->unset_userdata('username');
    //     $this->session->unset_userdata('nama');
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Sudah Logout </div>');
    //     redirect('auth/login');

    // }
}