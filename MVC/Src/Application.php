<?php
namespace Src;

use Dotenv\Dotenv;
use Src\Http\Route;
use Src\Http\Request;
use Src\Http\Response;

class Application{
    private static $instance =null;
    private Request $request;
    private Response $response;
    private Route $route;
    private Dotenv $env;
    // private properties, contruct
    // private static $instance =null;
    //  public static function getInstance() ---> if statment on $instance
    private function __construct(){
        $this->request = new Request;
        $this->response = new Response;
        $this->route = new Route($this->request, $this->response);
        $this->env = Dotenv::createImmutable(base_path());   
        // echo 'one-Instance';    
    }

    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new Application();
      }
      return self::$instance;
    }
    public function run(){
        
        $this->env->safeLoad(); //must be above calling resolve 
        $this->route->resolve();  
    }
}



