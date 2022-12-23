<?php

namespace App\Models;

use CodeIgniter\Model;

class M_fasilitas extends Model
{
    protected $table = 'tbl_fasilitas';
    protected $returnType = 'object';
    protected $allowedFields = ['nama', 'koordinat' , 'jenis', 'opereator', 'lisensi', 'status', 'kedalaman', 'sumber', 'gambar'];
    // protected $allowedFields = [];

    public function search($keyword)
    {
        return $this->like('nama', $keyword)->orLike('jenis', $keyword);
    }

    public function getdata()
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_fasilitas');

        $query = $builder->get();
        return $query->getResult();
    }

    function getFasilitasById($id_fasilitas)
    {
        $sql = ('SELECT * FROM tbl_fasilitas WHERE id = ' . $id_fasilitas);
        return $this->db->query($sql)->getFirstRow();
    }

    
 
    public function updateMigas($data, $id)
    {
        $query = $this->db->table('tbl_fasilitas')->update($data, array('id' => $id));
        return $query;
    }
 
    public function deleteMigas($id)
    {
        $query = $this->db->table('tbl_fasilitas')->delete(array('id' => $id));
        return $query;
    }

    public function insertMigas($data, $id)
    {
        $query = $this->db->table('tbl_fasilitas')->insert($data, $id);
        return $query;
    }
    
}
// $builder->like('title', 'match');
// $builder->like('body', 'match');

