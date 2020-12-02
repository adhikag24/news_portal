<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_news extends Model
{
    protected $table = "news";
 
    public function getNews($id = false)
    {
        if($id === false){
            return $this->table('news')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('news')
                        ->where('news_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insertNews($data = false)
    {
       if($data){
          return $this->db->table($this->table)->insert($data);
       }
    }
}