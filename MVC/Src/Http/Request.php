<?php
namespace Src\Http;

class Request{
    public function all(){
        return $_REQUEST;
    }
    public function method(){
        // print_r ($_SERVER);
        // echo strtolower($_SERVER['REQUEST_METHOD']);
        
        return(strtolower($_SERVER['REQUEST_METHOD']));
    }
    public function url(){
        // dd($_SERVER['REQUEST_URI']);
        return($_SERVER['REQUEST_URI']);
       
    }
}