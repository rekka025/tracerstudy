<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Entity\Row;
class AlumniFeb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_feb');
    }



    public function index()
    {
        if (!$this->session->userdata('username') ) {
			redirect('auth');
		} else {
     
        $data['alumni'] = $this->M_feb->getListAlumni();
        $data['nama'] = $this->session->userdata('nama');
        
			$this->load->view('feb/templates/header');
			$this->load->view('feb/templates/sidebar');
			$this->load->view('feb/alumni', $data);
			$this->load->view('feb/templates/footer');
        }
       
    }
    public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        // $this->upload->initialize($config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                foreach ($sheet->getRowIterator() as $row) {
                        $data_alumni = array(
                            'nim'  => $row->getCellAtIndex(2),
                            'nik'     => $row->getcellatindex(3),
                            'kode_prodi'     => $row->getcellatindex(4),
                            'nama'     => $row->getcellatindex(5),
                            'jenis_kelamin'  => $row->getcellatindex(6),
                            'tempat_lahir'  => $row->getcellatindex(7),
                            'tanggal_lahir'  => $row->getcellatindex(8),
                            'hp'  => $row->getcellatindex(9),
                            'tahun_lulus'  => $row->getcellatindex(10),
                            'npwp'  => $row->getcellatindex(11),
     
                            
                              
                        );
                        $this->M_feb->import_data_alumni($data_alumni);
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('admin/alumni');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
    
    public function exportdata()
    {
      
        $data = $this->M_feb->getExportData();
        $writer = WriterEntityFactory::createXLSXWriter();
        // $writer = WriterEntityFactory::createODSWriter();
        // $writer = WriterEntityFactory::createCSVWriter();

        // $writer->openToFile(); // write data to a file or to a PHP stream
        $filename = 'hasil_export_' . date('d-M-Y') . '.xlsx';
        $writer->openToBrowser($filename); // stream data directly to the browser
        $header = ['nim', 'nik', 'kode_prodi','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','hp','tahun_lulus','npwp'];
        $writer->addRow(WriterEntityFactory::createRowFromArray($header));
        
        foreach ($data as $row){
            
           $rowData = [$row ->nim,
                       $row ->nik,
                       $row ->kd_prodi,
                       $row ->nama,
                       $row ->jenis_kelamin,
                       $row ->tempat_lahir,
                       $row ->tanggal_lahir,
                       $row ->hp,
                       $row ->tahun_lulus,
                       $row ->npwp
                        ];
        
        /** Shortcut: add a row from an array of values */
      
        $rowFromValues = WriterEntityFactory::createRowFromArray($rowData);
        $writer->addRow($rowFromValues);
       
    }
    
        $writer->close();
      
    }


}