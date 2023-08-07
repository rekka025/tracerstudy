
<?php

class M_daerah extends CI_Model
{
   

   public function getProv(){
        $query = $this->db->query("SELECT * FROM provinsi ORDER BY nama_prov ASC");
        return $query->result();
       }
   
 
     function getKota($id_prov){
		$query = $this->db->get_where('kab_kota', array('id_prov' => $id_prov));
		return $query;
	}


}


