<?php
namespace core;
//config for database

class Database{
    private const HOST = 'localhost';
    private const DBNAME = 'mvc';
    private const USERNAME = 'root';
    private const PASSWORD = '';
    private $connect = null;
    public function connect(){
        try{
            $this->connect = new \PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME,self::USERNAME, self::PASSWORD);
        }catch(Exception $err){
            echo $err->getmessage();
        }
        return $this->connect;
    }
}