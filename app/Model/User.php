<?php
namespace app\Model;
use core\Interface\InterfaceModel;
use core\Database;


class User implements InterfaceModel{
public function fetch(){
$connect = (new Database)->connect();
$query = "SELECT * FROM user";
$pre = $connect->prepare($query);
$pre->execute();
return $pre->fetchAll();
}
public function insert($data){
//insert mtehod
}
public function update($id, $data){
//update method
}
public function delete($id){
//delete method
}
}