<?php


class Connection
{


    public $db;


    public function __construct()
    {
        $this->connectio_database();
    }

    public function connectio_database()
    {

        $this->db = new mysqli('localhost' , 'root' , '' , 'oop');

        if ($this->db->connect_errno) {
            exit("Failed Connect with database" . $this->db->connect_errno);
        }
    }

    public function query($sql){

    $result = $this->db->query($sql);

    if(!$result){
    exit($this->db->error);
    }
    return $result;
    }

    public function secure($data){
    $query = $this->db->real_escape_string(htmlspecialchars($data));
    return $query;
    }
}


$obj = new Connection();

//sayre file user bka ama bo away lagal aw connect be
require 'user.php'

?>
