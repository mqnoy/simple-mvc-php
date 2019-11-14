<?php
namespace App\Model;
use System\Core\DB;
/**
 * 
 *  create read update delete
 * 
 */
class Home
{
    private $db;
    private $table = 'master_kelas';
    public function __construct()
    {
        $this->db = new DB; 
    }
    public function createKelas($txtkelas,$akelas){
    $query = "INSERT INTO {$this->table} (txt_kelas,kelas) VALUES (:a,:b)";
        $this->db->query($query);
        $this->db->bind(':a',$txtkelas);
        $this->db->bind(':b',$akelas);
        return $this->db->execute();
    }
    public function readWhereKelas(){
    }
    public function readKelas()
    {
        $this->db->query("SELECT * FROM master_kelas");
        $res =  $this->db->fetchAll();
        return $res;
    }
    public function updateKelas(){
        
    }
    public function deleteKelas(){
        
    }
    
}