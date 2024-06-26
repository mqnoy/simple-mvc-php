<?php
namespace System\Core;
use PDO;
class DB
{
    private $db_host=DB_HOST;
    private $db_user=DB_USER;
    private $db_password=DB_PASS;
    private $db_name=DB_NAME;
    private $dbh;
    private $stmt;
    function __construct()
    {
        try {
            //buat koneksi mysql
            $this->dbh = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_user, $this->db_password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) { 
            print "tidak bisa koneksi database error : ".$e->getMessage()."\n";
            die();
        }
    }
    public function bind($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		return $this->stmt->bindParam($param, $value, $type);
    }
    
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    public function execute()
    {
        $this->stmt->execute();
    }
    //fetch single 
    public function fetch()
    {
        
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    //fetch all 
    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}