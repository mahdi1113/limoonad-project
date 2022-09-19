<?php

require 'config.php';

class database{

    private $connection = '';

    public function __construct()
    {
        $this->openConnection();
    }

    public function openConnection()
    {
        $this->connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
        if(!$this->connection){
            die("DATABASE CONNECTION FAILED" );
        }
        $db_select = mysqli_select_db($this->connection,DB_NAME);
        if(!$db_select){
            die('DATABASE SELECTION FAILED');
        }
    }

    public function execute($query)
    {
        $result = [];
        $result = mysqli_query($this->connection,$query);
        if(!$result){
            die("DATABASE QUERY FAILED");
        }
        return $result;
    }

    public function fetch($query)
    {
        $result = $this->execute($query);
        if($result->num_rows > 0)
        {
            while($row = mysqli_fetch_assoc($result)){
                $output []= $row;
            }
        }else{
            return 'هیچ نتیجه ای پیدا نشد';
        }

        return $output;
    }

    public function find($query)
    {
        $result = $this->execute($query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    public function insertId()
    {
        return mysqli_insert_id($this->connection);
    }

    public function closeConnection()
    {
        if(isset($this->connection))
        {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function __destruct()
    {
        $this->closeConnection();       
    }

}

$db = new database();