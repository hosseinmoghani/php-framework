<?php
namespace core;
use core\interface\InterfaceController;

class BaseController implements InterfaceController{
    public static function renderView($folder, $file, $data = []){
        require_once "./../app/view/$folder/$file.php";
    }
}