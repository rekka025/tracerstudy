<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }


    public function index()
    {

        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('validasi');
            $this->load->view('templates/footer');
        } else {
            $this->_valid2();
        }
  
    }


    private function _valid2()
    {
        $nim = $this->input->post('nim');

        $user = $this->db->get_where('data_responden', ['nim' => $nim])->row_array();

        if ($user) {
          
                //jika tidak kirimkan username tidak ada di database
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Sudah Menyelesaikan Survey</div>');
                redirect('validasi');
           
        } else {
            $this->_valid();
        }
    }

    private function _valid()
    {
        $nim = $this->input->post('nim');
        $nik = $this->input->post('nik');

        $user = $this->db->get_where('data_alumni', ['nim' => $nim, 'nik' => $nik])->row_array();


        //cek user di database dulu
        if ($user != NULL) {
            //tambahkan data jika data ingin di kiriim ke kuesioner
            $data = [
                'nim' => $user['nim'],
                'nik' => $user['nik'],
                'nama' => $user['nama'],
                'status' => "valid"
            ];
            $this->session->set_userdata($data);
            redirect('kuesioner');
        } else {
            //jika tidak kirimkan username tidak ada di database
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK atau NIM anda tidak terdaftar </div>');
            redirect('validasi');
        }
    }



}