<?php
namespace core\Interface;

interface InterfaceController{
    public static function renderView($folder, $file, $data =[]);
}