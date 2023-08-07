<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_feb extends CI_Model
{
    //perprodi
    // public function bekerja()
    // {
    //     $this->db->select('COUNT(DISTINCT data_responden.nim) as bekerja');
    //     $this->db->from('data_responden');
    //     $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    //     $this->db->where('data_responden.f8', '1');
    //     $this->db->where('data_alumni.kd_prodi', '61201');      
    //     $query = $this->db->get();
    //     return $query->row()->bekerja;
    // }
    
    // public function getAlumniS1Manajemen()
    // {
    //     $this->db->select('COUNT(DISTINCT nim) as getAlumni');
    //     $this->db->from('data_alumni');
    //     $this->db->where('data_alumni.kd_prodi', '61201');
    //     $query = $this->db->get();
    //     return $query->row()->getAlumni;
    // }
    //import export
  
    public function getExportData()
    {
        $this->db->select('*');
        $this->db->from('data_responden');
        $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
        $this->db->group_start(); // Mulai kelompokkan kondisi
        $this->db->where('data_alumni.kd_prodi', '61201');
        $this->db->or_where('data_alumni.kd_prodi', '61101');
        $this->db->or_where('data_alumni.kd_prodi', '62201');
        $this->db->group_end(); // Akhiri kelompokkan kondisi
        $query = $this->db->get();
        return $query->result();
    }

    //data table
    public function getListResponden()
    {
        $query = $this->db->select('*')
        ->from('data_alumni')
        ->where_in('data_alumni.kd_prodi', ['61201', '61101', '62201'])
        ->join('data_responden','data_responden.nim=data_alumni.nim')
        ->get();
        return $query->result();
    }
    public function getListAlumni()
    {
        $query = $this->db->select('*')
            ->from('data_alumni')
            ->where_in('data_alumni.kd_prodi', ['61201', '61101', '62201'])
            ->get();
        return $query->result();
    }
    public function getAlumni()
    {
        $this->db->select('COUNT(DISTINCT nim) as getAlumni');
        $this->db->from('data_alumni');
        // $this->db->where('data_alumni.kd_prodi', '61201');
        $this->db->group_start(); // Mulai kelompokkan kondisi
        $this->db->where('data_alumni.kd_prodi', '61201');
        $this->db->or_where('data_alumni.kd_prodi', '61101');
        $this->db->or_where('data_alumni.kd_prodi', '62201');
        $this->db->group_end(); // Akhiri kelompokkan kondisi
        $query = $this->db->get();
        return $query->row()->getAlumni;
    }
    public function bekerja()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as bekerja');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f8', '1');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->bekerja;
}
    public function blm_memungkinkan_bkjr()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as blm_memungkinkan_bkjr');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f8', '2');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->blm_memungkinkan_bkjr;
}
public function wiraswasta1()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as wiraswasta1');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f8', '3');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->wiraswasta1;
}
public function melanjutkan_pendidikan()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as melanjutkan_pendidikan');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f8', '4');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->melanjutkan_pendidikan;
}
public function tidakbekerja()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as tidakbekerja');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f8', '5');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->tidakbekerja;
}

public function total_responden()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as total_responden');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->total_responden;
}
 

  

//hubungan prodi dan pekerjaan

public function sangatErat()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as sangatErat');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f14', '1');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->sangatErat;
}
public function erat()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as erat');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f14', '2');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->erat;
}
public function cukupErat()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as cukupErat');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f14', '3');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->cukupErat;
}
public function kurangErat()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as kurangErat');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f14', '4');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->kurangErat;
}
public function tidakSamaSekali()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as tidakSamaSekali');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f14', '5');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->tidakSamaSekali;
}

//total alumni yang bekerja di ....
public function totalAlumni1()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni1');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '1');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni1;
}
public function totalAlumni2()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni2');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '2');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni2;
}
public function totalAlumni3()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni3');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '3');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni3;
}
public function totalAlumni4()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni4');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '4');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni4;
}
public function totalAlumni5()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni5');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '5');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni5;
}
public function totalAlumni6()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni6');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '6');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni6;
}
public function totalAlumni7()
{
    $this->db->select('COUNT(DISTINCT data_responden.nim) as totalAlumni7');
    $this->db->from('data_responden');
    $this->db->join('data_alumni', 'data_alumni.nim = data_responden.nim');
    $this->db->where('data_responden.f1101', '7');
    $this->db->group_start(); // Mulai kelompokkan kondisi
    $this->db->where('data_alumni.kd_prodi', '61201');
    $this->db->or_where('data_alumni.kd_prodi', '61101');
    $this->db->or_where('data_alumni.kd_prodi', '62201');
    $this->db->group_end(); // Akhiri kelompokkan kondisi
    $query = $this->db->get();
    return $query->row()->totalAlumni7;
}

// function getAlumni()
// {
//         return $this->db->get('data_alumni')->num_rows();
   
// }


}
