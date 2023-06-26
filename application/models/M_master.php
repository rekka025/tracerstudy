<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
    public function import_data_alumni($data_alumni)
    {
        // var_dump($data_alumni);
        // die;
        $jumlah = count($data_alumni);
        if ($jumlah > 0) {
            $this->db->replace('data_alumni', $data_alumni);
        }
    }

    public function getExportData()
    {
        $this->db->select('*');
        $this->db->from('data_responden');
        $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
        // Ubah 'table2_id' dengan kolom yang menjadi kunci join antara table1 dan table2
        $query = $this->db->get();
        return $query->result();
    }

    public function import_data_responden($data_responden)
    {
        $jumlah = count($data_responden);
        if ($jumlah > 0) {
            $this->db->replace('data_responden', $data_responden);
        }
    }

    public function getResponden()
    {
        $query = $this->db->select('*')
        ->from('data_alumni')
        ->join('data_responden','data_responden.nim=data_alumni.nim')
        ->get();
        return $query->result();
    }

    public function getAlumni1()
    {
        $query = $this->db->select('*')
        ->from('data_alumni')
        ->get();
        return $query->result();
    }
   //jmlh stts mahasiswa

   function bekerja(){
    $this->db->select('COUNT(DISTINCT nim) as bekerja');
    $this->db->where("f8 =","1");
    $query = $this->db->get('data_responden');
    return $query->row()->bekerja;
   }
function blm_memungkinkan_bkjr(){
    $this->db->select('COUNT(DISTINCT nim) as blm_memungkinkan_bkjr');
    $this->db->where("f8 =","2");
    $query = $this->db->get('data_responden');
    return $query->row()->blm_memungkinkan_bkjr;
    }

function wiraswasta1(){
    $this->db->select('COUNT(DISTINCT nim) as wiraswasta1');
    $this->db->where("f8 =","3");
    $query = $this->db->get('data_responden');
    return $query->row()->wiraswasta1;
 
    
    }
function melanjutkan_pendidikan(){
    $this->db->select('COUNT(DISTINCT nim) as melanjutkan_pendidikan');
    $this->db->where("f8 =","4");
    $query = $this->db->get('data_responden');
    return $query->row()->melanjutkan_pendidikan;
    }
function tidakbekerja(){
    $this->db->select('COUNT(DISTINCT nim) as tidakbekerja');
    $this->db->where("f8 =","5");
    $query = $this->db->get('data_responden');
    return $query->row()->tidakbekerja;
    }
 
// function total_responden() {
//         // return $this->db->get('data_responden')->num_rows();
//         $this->db->select('COUNT(DISTINCT nim) as total_responden');
//     $query = $this->db->get('data_responden');
//     $result = $query->row();
//       }
      public function total_responden()
{
    $this->db->select('COUNT(DISTINCT nim) as total_responden');
    $query = $this->db->get('data_responden');
    return $query->row()->total_responden;
}

//hubungan prodi dan pekerjaan
function sangatErat()
{
    $this->db->select('COUNT(DISTINCT nim) as sangatErat');
    $this->db->where("f14 =","1");
    $query = $this->db->get('data_responden');
    return $query->row()->sangatErat;
    // $this->db->where("f14 =","1");
    // return $this->db->count_all_results("data_responden");
}

function erat()
{
    $this->db->select('COUNT(DISTINCT nim) as erat');
    $this->db->where("f14 =","2");
    $query = $this->db->get('data_responden');
    return $query->row()->erat;
}
function cukupErat()
{
    $this->db->select('COUNT(DISTINCT nim) as cukupErat');
    $this->db->where("f14 =","3");
    $query = $this->db->get('data_responden');
    return $query->row()->cukupErat;
  
}
function kurangErat()
{
    $this->db->select('COUNT(DISTINCT nim) as kurangErat');
    $this->db->where("f14 =","4");
    $query = $this->db->get('data_responden');
    return $query->row()->kurangErat;
 
}
function tidakSamaSekali()
{
    $this->db->select('COUNT(DISTINCT nim) as tidakSamaSekali');
    $this->db->where("f14 =","5");
    $query = $this->db->get('data_responden');
    return $query->row()->tidakSamaSekali;

}
//total alumni yang bekerja di ....
function totalAlumni1()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni1');
    $this->db->where("f1101 =","1");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni1;

}
function totalAlumni2()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni2');
    $this->db->where("f1101 =","2");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni2;
  
}
function totalAlumni3()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni3');
    $this->db->where("f1101 =","3");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni3;
}
function totalAlumni4()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni4');
    $this->db->where("f1101 =","4");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni4;
}
function totalAlumni5()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni5');
    $this->db->where("f1101 =","5");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni5;
}
function totalAlumni6()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni6');
    $this->db->where("f1101 =","6");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni6;
}
function totalAlumni7()
{
    $this->db->select('COUNT(DISTINCT nim) as totalAlumni7');
    $this->db->where("f1101 =","7");
    $query = $this->db->get('data_responden');
    return $query->row()->totalAlumni7;
}
function getAlumni()
{
        return $this->db->get('data_alumni')->num_rows();
   
}



// //get prodi

// public function getProdiJepang()
// {
//     $query = $this->db->select("kd_prodi =","79402")
//     ->from('data_alumni')
//     ->join('prodi','prodi.kd_prodi=data_alumni.kd_prodi')
//     ->get();
//     return $query->result();
// }
// public function getProdiAdmBisnis()
// {
//     $query = $this->db->select("kd_prodi =","79404")
//     ->from('data_alumni')
//     ->join('prodi','prodi.kd_prodi=data_alumni.kd_prodi')
//     ->get();
//     return $query->result();
// }
// public function getProdiAdmPublik()
// {
//     $query = $this->db->select("kd_prodi =","63201")
//     ->from('data_alumni')
//     ->join('prodi','prodi.kd_prodi=data_alumni.kd_prodi')
//     ->get();
//     return $query->result();
// }

}