<?php

use function PHPSTORM_META\exitPoint;

class User
{


public $id;
public $username;
public $password;
public $rule;
    // method 1
    public static function getUser()
    {
        return self::query_process("SELECT * FROM users");
       
    }


    //method 2

    public static function getUserById($user_id) // return one user
    {
       $single_data_user = self::query_process("SELECT * FROM `users` where `id` = '$user_id'");
        return !empty($single_data_user) ? array_shift($single_data_user) : false ;       
    }


    //method 3
    public static function query_process($sql){
            global $obj;
            $query = $obj->query($sql);
            $get_data_in_db = array();

            while($rows = mysqli_fetch_array($query)){

            $get_data_in_db[] = self::instance($rows);

            }

            return $get_data_in_db;
            
    }

    //method 4
    public static function instance($column){
    
    $userClass = new self;
    
    foreach($column as $property => $value){
        if($userClass->has_property($property)){
            $userClass->$property = $value;
        }
    }
            return $userClass;
    }

    private function has_property($property){

    $class_property = get_object_vars($this); // id , name
    return array_key_exists($property , $class_property); // id or name == property foreach?

    }

    public static function verify($username , $password){
    $password = hash('gost' , $password);
    $query = self::query_process("SELECT * FROM users where username = '$username' and password = '$password' LIMIT 1");
    return !empty($query) ? array_shift($query) : false;

    }

    public function create(){
        global $obj;    

        $username = $obj->secure($this->username);
        $password = $obj->secure(hash('gost',$this->password));
        $rule = $obj->secure($this->rule);

       $insert = $obj->query("INSERT INTO `users`(`username` , `password` ,`rule`) VALUES('$username' , '$password' , '$rule')");
        if($insert){
        exit("Successfuly add");
        }else{
            exit("failed");
        }
    }

    public function update(){
        global $obj;

        
        $id = $obj->secure($this->id);
        $username = $obj->secure($this->username);
        $password = $obj->secure(hash('gost' , $this->password));
        $rule = $obj->secure($this->rule);
        $query =  $obj->query("UPDATE `users` set `username` = '$username' , `password` = '$password' , `rule` = '$rule' WHERE `id` = '$id'");
        
        
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function delete(){
    global $obj;
    $id = $this->id;
    
    $query = $obj->query("DELETE FROM `users` where id = '$id' LIMIT 1");
    if($query){
    return true;
    }else{
        return false;
    }
    }
}


$user = new User();

?>