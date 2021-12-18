<?php
namespace core\Interface;

interface InterfaceModel{
    public function fetch();
    public function insert($data);
    public function update($id, $data);
    public function delete($id);
}