<?php
class DBConnection{

    private $host = 'eduedget001.mysql.guardedhost.com';
    private $username = 'eduedget001_dare2design';
    private $password = 't3!cg7cu2rTH';
    private $database = 'eduedget001_dare2design';


    // private $host = 'localhost';
    // private $username = 'root';
    // private $password = 'nedscholarsMysql321';
    // private $database = 'eduedget001_dare2design';
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>