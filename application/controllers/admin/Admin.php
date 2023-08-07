<?php

class Admin extends CI_Controller {

public function __construct() {
    
        parent::__construct();
		if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
       
        $this->load->model('M_master');
   
    $this->load->helper('text');
    
}
    
public function index() {


    $data['username'] = $this->session->userdata('username');
    $data['nama'] = $this->session->userdata('nama');

	$data['bekerja'] = $this->M_master->bekerja();
	$data['blm_memungkinkan_bkjr'] = $this->M_master->blm_memungkinkan_bkjr();
	$data['wiraswasta1'] = $this->M_master->wiraswasta1();
	$data['melanjutkan_pendidikan'] = $this->M_master->melanjutkan_pendidikan();
	$data['tidakbekerja'] = $this->M_master->tidakbekerja();
	
	$data['total_responden'] =  $this->M_master->total_responden();
	$data['total_alumni'] = $this->M_master->getAlumni();
	
	//seberapa erat...
	$data['sangat_erat'] =  $this->M_master->sangatErat();
	$data['erat'] =  $this->M_master->erat();
	$data['cukup'] =  $this->M_master->cukupErat();
	$data['kurang'] =  $this->M_master->kurangErat();
	$data['tidak'] =  $this->M_master->tidakSamaSekali();



	//banyak bekerja di...
	$data['intansi_pemerintah'] =  $this->M_master->totalAlumni1();
	$data['bumn'] =  $this->M_master->totalAlumni6();
	$data['institusi'] =  $this->M_master->totalAlumni7();
	$data['organisasi_non_profit'] =  $this->M_master->totalAlumni2();
	$data['prusahaan_swasta'] =  $this->M_master->totalAlumni3();
	$data['lainnya'] =  $this->M_master->totalAlumni5();
	$data['wiraswasta'] =  $this->M_master->totalAlumni4();
$this->load->view('admin/templates/header');
$this->load->view('admin/templates/sidebar');
$this->load->view('admin/dashboard', $data);
$this->load->view('admin/templates/footer');

}


public function logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();

    redirect('auth');
    }

}
?>