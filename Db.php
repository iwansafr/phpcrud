<?php
class Db{
    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $driver;
    public function __construct($host, $username, $password, $db)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->driver = $this->connect();
    }
    
    public function connect()
    {
        $db = new mysqli($this->host, $this->username, $this->password, $this->db);
        if($db->connect_error){
            die('connection failed : '.$db->connect_error);
        }
        return $db;
    }
    public function query($sql)
    {
        if(!empty($sql)){
            return mysqli_query($this->driver, $sql);
        }
    }
    public function getData($table){
        $sql = $this->query('SELECT * FROM '.$table);
        $data = [];
        if($sql->num_rows > 0){
            while($row = $sql->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
}