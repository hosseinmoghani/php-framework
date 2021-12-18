<?php
namespace core;
use app\Route;
//core app

class App{
    public function setUrl(){
        $url = htmlspecialchars(stripslashes(trim($_SERVER['REQUEST_URI'],"/")));
        $url = explode("/", $url);
        // Code below, for localhost testing. //
        unset($url[0], $url[1]);
        // ======================= //
        return $url;
    }
    public function __construct(){
        $url = $this->setUrl();
        $route = (new Route)->route;
        foreach($route as $index=>$value){
            $controller = explode("@",$value[0]);
            $use = "\\app\\controller\\".$controller[0];
            $use = new $use;
            if($value[1] == "/".implode("/",$url)){
                $method = $controller[1];
                break;
            }
        }
        if(empty($method)){$method = "notfound";}
        $use->$method();
    }
}