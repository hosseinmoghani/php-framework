<?php
namespace app\Controller;
use core\BaseController;
use app\model\User;

class DefaultController extends BaseController{
    public function homepage(){
        parent::renderView("default","index");
    }
    public function user(){
        $data = (new User())->fetch();
        parent::renderView("default","user", $data);
    }
    public function notfound(){
        parent::renderView("default","404");
    }
}