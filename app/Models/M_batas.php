<?php

namespace App\Models;

use CodeIgniter\Model;

class M_batas extends Model
{
    protected $table = 'tbl_batas';
    protected $returnType = 'object';
    protected $allowedFields = ['desa', 'kelurahan' , 'koordinat'];
    // protected $allowedFields = [];

    public function search($keyword)
    {
        return $this->like('desa', $keyword);
    }

    public function getdata()
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_batas');

        $query = $builder->get();
        return $query->getResult();
    }

    function getBatasById($id_batas)
    {
        $sql = ('SELECT * FROM batas WHERE id = ' . $id_batas);
        return $this->db->query($sql)->getFirstRow();
    }

    
    public function updateBatas($data, $id)
    {
        $query = $this->db->table('tbl_batas')->update($data, array('id' => $id));
        return $query;
    }
 
    public function deleteBatas($id)
    {
        $query = $this->db->table('tbl_batas')->delete(array('id' => $id));
        return $query;
    }
    public function insertBatas($data, $id)
    {
        $query = $this->db->table('tbl_batas')->insert($data, $id);
        return $query;
    }
}
// $builder->like('title', 'match');
// $builder->like('body', 'match');
