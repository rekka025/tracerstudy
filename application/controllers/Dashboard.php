<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master');
    }



	public function index()
	{
		//status alumni
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
		

		// view		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}






}