<?php

class M_data extends CI_Model
{
    private $table = 'data_responden';
    function tampil_data()
    {
        return $this->db->get('data_alumni');
    }
    // public function rules()
    // {
    //     return [
    //         [
    //             //samakan dengan atribute name pada tags input
    //             'field' => 'f8',
    //             // label yang kan ditampilkan pada pesan error
    //             'label' => 'f8',
    //             //rules validasi
    //             'rules' => 'trim|required'
    //         ],
    //         [
    //             'field' => 'f502',
    //             'label' => 'f502',
    //             'rules' => 'trim|required'
    //         ]
    //         // [
    //         //     'field' => 'f504',
    //         //     'label' => 'f504',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1101',
    //         //     'label' => 'f1101',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f5b',
    //         //     'label' => 'f5b',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f5c',
    //         //     'label' => 'f5c',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f5d',
    //         //     'label' => 'f5d',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f18a',
    //         //     'label' => 'f18a',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f18b',
    //         //     'label' => 'f18b',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f18c',
    //         //     'label' => 'f18c',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f18d',
    //         //     'label' => 'f18d',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1201',
    //         //     'label' => 'f1201',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f14',
    //         //     'label' => 'f14',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f15',
    //         //     'label' => 'f15',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f301',
    //         //     'label' => 'f301',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f302',
    //         //     'label' => 'f302',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f303',
    //         //     'label' => 'f303',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f401',
    //         //     'label' => 'f401',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f402',
    //         //     'label' => 'f402',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f403',
    //         //     'label' => 'f403',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f404',
    //         //     'label' => 'f404',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f405',
    //         //     'label' => 'f405',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f406',
    //         //     'label' => 'f406',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f407',
    //         //     'label' => 'f407',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f408',
    //         //     'label' => 'f408',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f409',
    //         //     'label' => 'f409',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f410',
    //         //     'label' => 'f410',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f411',
    //         //     'label' => 'f411',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f412',
    //         //     'label' => 'f412',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f413',
    //         //     'label' => 'f413',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f414',
    //         //     'label' => 'f414',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f415',
    //         //     'label' => 'f415',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f6',
    //         //     'label' => 'f6',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f7',
    //         //     'label' => 'f7',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f7a',
    //         //     'label' => 'f7a',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1001',
    //         //     'label' => 'f1001',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1601',
    //         //     'label' => 'f1601',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1602',
    //         //     'label' => 'f1602',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1603',
    //         //     'label' => 'f1603',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1604',
    //         //     'label' => 'f1604',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1605',
    //         //     'label' => 'f1605',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1606',
    //         //     'label' => 'f1606',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1607',
    //         //     'label' => 'f1607',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1608',
    //         //     'label' => 'f1608',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1609',
    //         //     'label' => 'f1609',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1610',
    //         //     'label' => 'f1610',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1611',
    //         //     'label' => 'f1611',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1612',
    //         //     'label' => 'f1612',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1613',
    //         //     'label' => 'f1613',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f505',
    //         //     'label' => 'f505',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f5a1',
    //         //     'label' => 'f5a1',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f5a2',
    //         //     'label' => 'f5a2',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1761',
    //         //     'label' => 'f1761',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1762',
    //         //     'label' => 'f1762',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1763',
    //         //     'label' => 'f1763',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1764',
    //         //     'label' => 'f1764',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1765',
    //         //     'label' => 'f1765',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1766',
    //         //     'label' => 'f1766',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1767',
    //         //     'label' => 'f1767',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1768',
    //         //     'label' => 'f1768',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1769',
    //         //     'label' => 'f1769',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1770',
    //         //     'label' => 'f1770',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1771',
    //         //     'label' => 'f1771',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1772',
    //         //     'label' => 'f1772',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1773',
    //         //     'label' => 'f1773',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f1774',
    //         //     'label' => 'f1774',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f21',
    //         //     'label' => 'f21',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f22',
    //         //     'label' => 'f22',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f23',
    //         //     'label' => 'f23',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f24',
    //         //     'label' => 'f24',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f25',
    //         //     'label' => 'f25',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f26',
    //         //     'label' => 'f26',
    //         //     'rules' => 'trim|required'
    //         // ],
    //         // [
    //         //     'field' => 'f27',
    //         //     'label' => 'f27',
    //         //     'rules' => 'trim|required'
    //         // ]
    //     ];
    // }
    public function save()
    {
        $data = array(
            "nim" => $this->input->post('nim'),
            "tanggal_isi" => $this->input->post('tanggal_isi'),
            "f8" => $this->input->post('f8'),
            "f502" => $this->input->post('f502'),
            "f504" => $this->input->post('f504'),
            "f1101" => $this->input->post('f1101'),
            "f5b" => $this->input->post('f5b'),
            "f5c" => $this->input->post('f5c'),
            "f5d" => $this->input->post('f5d'),
            "f18a" => $this->input->post('f18a'),
            "f18b" => $this->input->post('f18b'),
            "f18c" => $this->input->post('f18c'),
            "f18d" => $this->input->post('f18d'),
            "f1201" => $this->input->post('f1201'),
            "f14" => $this->input->post('f14'),
            "f15" => $this->input->post('f15'),
            "f301" => $this->input->post('f301'),
            "f302" => $this->input->post('f302'),
            "f303" => $this->input->post('f303'),
            "f401" => $this->input->post('f401'),
            "f402" => $this->input->post('f402'),
            "f403" => $this->input->post('f403'),
            "f404" => $this->input->post('f404'),
            "f405" => $this->input->post('f405'),
            "f406" => $this->input->post('f406'),
            "f407" => $this->input->post('f407'),
            "f408" => $this->input->post('f408'),
            "f409" => $this->input->post('f409'),
            "f410" => $this->input->post('f410'),
            "f411" => $this->input->post('f411'),
            "f412" => $this->input->post('f412'),
            "f413" => $this->input->post('f413'),
            "f414" => $this->input->post('f414'),
            "f415" => $this->input->post('f415'),
            "f6" => $this->input->post('f6'),
            "f7" => $this->input->post('f7'),
            "f7a" => $this->input->post('f7a'),
            "f1001" => $this->input->post('f1001'),
            "f1601" => $this->input->post('f1601'),
            "f1602" => $this->input->post('f1602'),
            "f1603" => $this->input->post('f1603'),
            "f1604" => $this->input->post('f1604'),
            "f1605" => $this->input->post('f1605'),
            "f1606" => $this->input->post('f1606'),
            "f1607" => $this->input->post('f1607'),
            "f1608" => $this->input->post('f1608'),
            "f1609" => $this->input->post('f1609'),
            "f1610" => $this->input->post('f1610'),
            "f1611" => $this->input->post('f1611'),
            "f1612" => $this->input->post('f1612'),
            "f1613" => $this->input->post('f1613'),
            "f505" => $this->input->post('f505'),
            "f5a1" => $this->input->post('f5a1'),
            "f5a2" => $this->input->post('f5a2'),
            "f1761" => $this->input->post('f1761'),
            "f1762" => $this->input->post('f1762'),
            "f1763" => $this->input->post('f1763'),
            "f1764" => $this->input->post('f1764'),
            "f1765" => $this->input->post('f1765'),
            "f1766" => $this->input->post('f1766'),
            "f1767" => $this->input->post('f1767'),
            "f1768" => $this->input->post('f1768'),
            "f1769" => $this->input->post('f1769'),
            "f1770" => $this->input->post('f1770'),
            "f1771" => $this->input->post('f1771'),
            "f1772" => $this->input->post('f1772'),
            "f1773" => $this->input->post('f1773'),
            "f1774" => $this->input->post('f1774'),
            "f21" => $this->input->post('f21'),
            "f22" => $this->input->post('f22'),
            "f23" => $this->input->post('f23'),
            "f24" => $this->input->post('f24'),
            "f25" => $this->input->post('f25'),
            "f26" => $this->input->post('f26'),
            "f27" => $this->input->post('f27'),

        );

        return $this->db->insert($this->table, $data);
    }
    // public function update_data($data, $nim)
    // {
    //     //update siswa
    //     return $this->db->update('data_alumni', $data, $nim);
    // }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
   


}