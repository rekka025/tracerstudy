<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Entity\Row;
class Responden extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master');
    }



    public function index()
    {
        if (!$this->session->userdata('username') ) {
			redirect('auth');
		} else {
        $data['responden'] = $this->M_master->getResponden();
        $data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
        
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/responden', $data);
			$this->load->view('admin/templates/footer');
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
                        $data_responden = array(
                            'nim'  => $row->getCellAtIndex(2),
                            'f8'     => $row->getcellatindex(7),
                            'f502'  => $row->getcellatindex(8),
                            'f504'  => $row->getcellatindex(9),
                            'f1101' => $row->getcellatindex(10),
                            'f5b'   => $row->getcellatindex(11),
                            'f5c'   => $row->getcellatindex(12),
                            'f5d'   => $row->getcellatindex(13),
                            'f18a'  => $row->getcellatindex(14),
                            'f18b'  => $row->getcellatindex(15),
                            'f18c'  => $row->getcellatindex(16),
                            'f18d'  => $row->getcellatindex(17),
                            'f1201' => $row->getcellatindex(18),
                            'f14'   => $row->getcellatindex(19),
                            'f15'   => $row->getcellatindex(20),
                            'f301'  => $row->getcellatindex(21),
                            'f302'  => $row->getcellatindex(22),
                            'f303'  => $row->getcellatindex(23),
                            'f401'  => $row->getcellatindex(24),
                            'f402'  => $row->getcellatindex(25),
                            'f403'  => $row->getcellatindex(26),
                            'f404'  => $row->getcellatindex(27),
                            'f405'  => $row->getcellatindex(28),
                            'f406'  => $row->getcellatindex(29),
                            'f407'  => $row->getcellatindex(30),
                            'f408'  => $row->getcellatindex(31),
                            'f409'  => $row->getcellatindex(32),
                            'f410'  => $row->getcellatindex(33),
                            'f411'  => $row->getcellatindex(34),
                            'f412'  => $row->getcellatindex(35),
                            'f413'  => $row->getcellatindex(36),
                            'f414'  => $row->getcellatindex(37),
                            'f415'  => $row->getcellatindex(38),
                            'f6'    => $row->getcellatindex(39),
                            'f7'    => $row->getcellatindex(40),
                            'f7a'   => $row->getcellatindex(41),
                            'f1001' => $row->getcellatindex(42),
                            'f1601' => $row->getcellatindex(43),
                            'f1602' => $row->getcellatindex(44),
                            'f1603' => $row->getcellatindex(45),
                            'f1604' => $row->getcellatindex(46),
                            'f1605' => $row->getcellatindex(47),
                            'f1606' => $row->getcellatindex(48),
                            'f1607' => $row->getcellatindex(49),
                            'f1608' => $row->getcellatindex(50),
                            'f1609' => $row->getcellatindex(51),
                            'f1610' => $row->getcellatindex(52),
                            'f1611' => $row->getcellatindex(53),
                            'f1612' => $row->getcellatindex(54),
                            'f1613' => $row->getcellatindex(55),
                            'f505'  => $row->getcellatindex(56),
                            'f5a1'  => $row->getcellatindex(57),
                            'f5a2'  => $row->getcellatindex(58),
                            'f1761'  => $row->getcellatindex(59),
                            'f1762'  => $row->getcellatindex(60),
                            'f1763'  => $row->getcellatindex(61),
                            'f1764'  => $row->getcellatindex(62),
                            'f1765'  => $row->getcellatindex(63),
                            'f1766'  => $row->getcellatindex(64),
                            'f1767'  => $row->getcellatindex(65),
                            'f1768'  => $row->getcellatindex(66),
                            'f1769'  => $row->getcellatindex(67),
                            'f1770'  => $row->getcellatindex(68),
                            'f1771'  => $row->getcellatindex(69),
                            'f1772'  => $row->getcellatindex(70),
                            'f1773'  => $row->getcellatindex(71),
                            'f1774'  => $row->getcellatindex(72),
                            'f21'  => $row->getcellatindex(73),
                            'f22'  => $row->getcellatindex(74),
                            'f23'  => $row->getcellatindex(75),
                            'f24'  => $row->getcellatindex(76),
                            'f25'  => $row->getcellatindex(74),
                            'f26'  => $row->getcellatindex(75),
                            'f27'  => $row->getcellatindex(76),     
                        );
                        $this->M_master->import_data_responden($data_responden);
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('admin/responden');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
    
    public function exportdata()
    {
      
        $data = $this->M_master->getExportData();
        $writer = WriterEntityFactory::createXLSXWriter();
        // $writer = WriterEntityFactory::createODSWriter();
        // $writer = WriterEntityFactory::createCSVWriter();

        // $writer->openToFile(); // write data to a file or to a PHP stream
        $filename = 'hasil_export_' . date('YmdHis') . '.xlsx';
        $writer->openToBrowser($filename); // stream data directly to the browser
        $header = [
            'Kode PT', 'Kode Prodi', 'NIM', 'Nama', 'HP', 'Tahun Lulus', 'NPWP',
            'F8', 'F502', 'F504', 'F1101', 'F5b', 'F5c', 'F5d', 'F18a', 'F18b',
            'F18c', 'F18d', 'F1201', 'F14', 'F15', 'F301', 'F302', 'F303', 'F401',
            'F402', 'F403', 'F404', 'F405', 'F406', 'F407', 'F408', 'F409', 'F410',
            'F411', 'F412', 'F413', 'F414', 'F415', 'F6', 'F7', 'F7a', 'F1001', 
            'F1601', 'F1602', 'F1603', 'F1604', 'F1605', 'F1606', 'F1607', 'F1608',
            'F1609', 'F1610', 'F1611', 'F1612', 'F1613', 'F505', 'F5a1', 'F5a2',
            'F1761', 'F1762', 'F1763', 'F1764', 'F1765', 'F1766', 'F1767', 'F1768',
            'F1769', 'F1770', 'F1771', 'F1772', 'F1773', 'F1774', 'F21', 'F22',
            'F23', 'F24', 'F25', 'F26', 'F27'];
        $writer->addRow(WriterEntityFactory::createRowFromArray($header));
        
        foreach ($data as $row){
            $rowData = [
                $row->kd_pt,
                $row->kd_prodi,
                $row->nim,
                $row->nama,
                $row->hp,
                $row->tahun_lulus,
                $row->npwp,
                $row->f8,
                $row->f502,
                $row->f504,
                $row->f1101,
                $row->f5b,
                $row->f5c,
                $row->f5d,
                $row->f18a,
                $row->f18b,
                $row->f18c,
                $row->f18d,
                $row->f1201,
                $row->f14,
                $row->f15,
                $row->f301,
                $row->f302,
                $row->f303,
                $row->f401,
                $row->f402,
                $row->f403,
                $row->f404,
                $row->f405,
                $row->f406,
                $row->f407,
                $row->f408,
                $row->f409,
                $row->f410,
                $row->f411,
                $row->f412,
                $row->f413,
                $row->f414,
                $row->f415,
                $row->f6,
                $row->f7,
                $row->f7a,
                $row->f1001,
                $row->f1601,
                $row->f1602,
                $row->f1603,
                $row->f1604,
                $row->f1605,
                $row->f1606,
                $row->f1607,
                $row->f1608,
                $row->f1609,
                $row->f1610,
                $row->f1611,
                $row->f1612,
                $row->f1613,
                $row->f505,
                $row->f5a1,
                $row->f5a2,
                $row->f1761,
                $row->f1762,
                $row->f1763,
                $row->f1764,
                $row->f1765,
                $row->f1766,
                $row->f1767,
                $row->f1768,
                $row->f1769,
                $row->f1770,
                $row->f1771,
                $row->f1772,
                $row->f1773,
                $row->f1774,
                $row->f21,
                $row->f22,
                $row->f23,
                $row->f24,
                $row->f25,
                $row->f26,
                $row->f27,
                ];
        
        /** Shortcut: add a row from an array of values */
      
        $rowFromValues = WriterEntityFactory::createRowFromArray($rowData);
        $writer->addRow($rowFromValues);
       
    }
    
        $writer->close();
      
    }


}


