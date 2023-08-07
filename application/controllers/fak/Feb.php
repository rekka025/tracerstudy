<?php

class Feb extends CI_Controller {

public function __construct() {
    
        parent::__construct();
        
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
    
        $this->load->model('M_feb');

    $this->load->helper('text');
    
}
    
public function index() {


    $data['username'] = $this->session->userdata('username');
    $data['nama'] = $this->session->userdata('nama');
	$data['title'] = "Dashboard";

				$data['bekerja'] = $this->M_feb->bekerja();
				$data['blm_memungkinkan_bkjr'] = $this->M_feb->blm_memungkinkan_bkjr();
				$data['wiraswasta1'] = $this->M_feb->wiraswasta1();
				$data['melanjutkan_pendidikan'] = $this->M_feb->melanjutkan_pendidikan();
				$data['tidakbekerja'] = $this->M_feb->tidakbekerja();

				$data['total_responden'] =  $this->M_feb->total_responden();
				$data['total_alumni'] = $this->M_feb->getAlumni();

				//seberapa erat...
				$data['sangat_erat'] =  $this->M_feb->sangatErat();
				$data['erat'] =  $this->M_feb->erat();
				$data['cukup'] =  $this->M_feb->cukupErat();
				$data['kurang'] =  $this->M_feb->kurangErat();
				$data['tidak'] =  $this->M_feb->tidakSamaSekali();



				//banyak bekerja di...
				$data['intansi_pemerintah'] =  $this->M_feb->totalAlumni1();
				$data['bumn'] =  $this->M_feb->totalAlumni6();
				$data['institusi'] =  $this->M_feb->totalAlumni7();
				$data['organisasi_non_profit'] =  $this->M_feb->totalAlumni2();
				$data['prusahaan_swasta'] =  $this->M_feb->totalAlumni3();
				$data['lainnya'] =  $this->M_feb->totalAlumni5();
				$data['wiraswasta'] =  $this->M_feb->totalAlumni4();


    $this->load->view('feb/templates/header');
    $this->load->view('feb/templates/sidebar',$data);
    $this->load->view('feb/dashboard', $data);
    $this->load->view('feb/templates/footer');

}


public function logout() {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    session_destroy();

    redirect('auth');
    }

}
?>