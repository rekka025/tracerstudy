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
	$this->form_validation->set_rules('f504','F504','required',
    array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('f504', 'F504', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('f1101', 'F1101', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f5b', 'F5b', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f5d', 'F5d', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f5c', 'F5c', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f18a', 'F18a', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f18b', 'F18b', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f18c', 'F18c', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f18d', 'F18d', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1201', 'F1201', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f14', 'F14', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f15', 'F15', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f301', 'F301', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f302', 'F302', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f303', 'F303', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f401', 'F401', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f402', 'F402', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f403', 'F403', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f404', 'F404', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f405', 'F405', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f406', 'F406', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f407', 'F407', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f408', 'F408', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f409', 'F409', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f410', 'F410', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f411', 'F411', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f412', 'F412', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f413', 'F413', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f414', 'F414', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f415', 'F415', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f6', 'F6', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f7', 'F7', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f7a', 'F7a', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1001', 'F1001', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1601', 'F1601', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1602', 'F1602', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1603', 'F1603', 'required
        
        ', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1604', 'F1604', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1605', 'F1605', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1606', 'F1606', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1607', 'F1607', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1608', 'F1608', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1609', 'F1609', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1610', 'F1610', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1611', 'F1611', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1612', 'F1612', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1613', 'F1613', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f505', 'F505', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f5a1', 'F5a1', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f5a2', 'F5a2', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1761', 'F1761', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1762', 'F1762', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1763', 'F1763', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1764', 'F1764', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1765', 'F1765', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1766', 'F1766', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1767', 'F1767', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1768', 'F1768', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1769', 'F1769', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1770', 'F1770', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1771', 'F1771', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1772', 'F1772', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1773', 'F1773', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f1774', 'F1774', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f21', 'F21', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f22', 'F22', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f23', 'F23', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f24', 'F24', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f25', 'F25', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f26', 'F26', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
        $this->form_validation->set_rules('f27', 'F27', 'required', array('required' => 'Silahkan Lengkapi Kuesioner %s.'));
       

    
    
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