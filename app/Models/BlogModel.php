<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class BlogModel extends Model{
    protected $table = 'blogs';
    protected $allowedFields = ['judul','kategori','sampul','isi','created_at','updated_at'];

    public function get_blog($username, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('username', $username);
        $log = $builder->get()->getRow();
        return $log;
    }

    public function get_blog_all() 
    {
            return $this->findAll(6);
    }
}