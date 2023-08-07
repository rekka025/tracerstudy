<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data');
        $this->load->model('m_daerah');
        $this->load->helper('url');
    }


    public function index()
    {
        if ($this->session->userdata('status') != "valid") {
            redirect('validasi');
        } else {
            $data['user'] = $this->db->get_where('data_alumni', ['nim' => $this->session->userdata('nim')])->row_array();
            $data['provinsi'] = $this->m_daerah->getProv();
            $this->load->view('kuesioner', $data);

        }
        

    }

    public function get_kota()
    {
        $id_prov = $this->input->post('id',TRUE);
        $data = $this->m_daerah->getKota($id_prov)->result();
        echo json_encode($data);
    }
    public function update()
    {
        $nim = $this->input->post('nim');
        $email = $this->input->post('email');
        $hp = $this->input->post('hp');

        $data = array(
            'email' => $email,
            'hp' => $hp
        );
        $where = array(
            'nim' => $nim
        );

        $this->m_data->update_data($where, $data, 'data_alumni');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Dirubah
        </div>');
        redirect('kuesioner');
    }
    public function add()
    {
       
    
    $this->form_validation->set_rules('f8','*','required',
    array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
	$this->form_validation->set_rules('f504','*','required',
    array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f502', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f505', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));   
    $this->form_validation->set_rules('f1101', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f1201', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));   
    $this->form_validation->set_rules('f14', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f15', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f1761', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f1762', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f21', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f22', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f23', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f24', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f25', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f26', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    $this->form_validation->set_rules('f27', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
    
       
        $this->form_validation->set_rules('f1763', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1764', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1765', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1766', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1767', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1768', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1769', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1770', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1771', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1772', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1773', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1774', '*', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
      
       

    
    
	if($this->form_validation->run() != FALSE ){
		$data = $this->m_data; //objek model    
        $data->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Survey anda berhasil disimpan. 
            
          </button></div>');
            redirect('validasi');
	
	}else{
        $data['user'] = $this->db->get_where('data_alumni', ['nim' => $this->session->userdata('nim')])->row_array();
        $data['provinsi'] = $this->m_daerah->getProv();
        return $this->load->view('kuesioner', $data);
		
	}

        // $data = $this->m_data; //objek model
        // $validation = $this->form_validation; //objek form validation
        // $validation->set_rules($data->rules()); //menerapkan rules validasi pada model data
        // //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada model data
        // if ($validation->run()) {
        //     $data->save();
        //     $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     Survey anda berhasil disimpan. 
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span>
        //   </button></div>');
        //     redirect('validasi');

        // }

    }



}