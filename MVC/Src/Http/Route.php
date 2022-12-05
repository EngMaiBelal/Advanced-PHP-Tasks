<?php 
namespace Src\Http;

class Route {
    private static array $routes = [];
    //1) Birdge
        // public $request;
        // public $response;
        // public function __construct(Request $request, Response $response){
        //     $this->request= $request;
        //     $this->response= $response;
        // }
    //2) Abbreviation Birdge 
    public function __construct(public Request $request, public Response $response){ 
    }

    public static function get(string $url, callable|array|string $action){
        // $url->login
        url_slash_handle($url);
        // $url->/login
        self::$routes['get'][$url] = $action;
    }
    public static function post(string $url, callable|array|string $action){
        url_slash_handle($url);
        self::$routes['post'][$url] = $action;
    }
    public function resolve(){
        // dd(self::$routes);
        $method = $this->request->method();
        $url    = $this->request->url();
        $data   = $this->request->all();    

        // call action after handling errors, actions
        $action = self::$routes[$method][$url] ?? null; // self::$routes['get']['/profile'];
        $this->errorHandler($url, $method); 
        $this->actionHandle($action, $data);

    }

    private function errorHandler(string $requestUrl, string $requestMethod){
        // handle errors (404, 405) by flag
        // dump(self::$routes);
        $findRoute = false;
        $is405 = false;
        foreach(self::$routes As $routeMethod => $routes){
            // key = action, value = url
            if(array_key_exists($requestUrl, $routes)){
                $findRoute = true;
                if( $routeMethod != $requestMethod){
                    $is405 = true;      
                }
            }
        }
        if($is405){
            abort("405");
        }
        if(!$findRoute){
            abort("404");
        }
    }

    public function actionHandle(callable | array | string | null $action, array $data){
        if(is_callable($action)){
            // 2:19:17 part1 mvc
            // الاكشن محتاج بارامتر او ملوش فطريقه الانفوك مختلفه
            //بتروح تنده ع الفانكشن وتباصي arg
            call_user_func_array( $action, [$data]);
         
        }elseif(is_array($action)){ 
            call_user_func_array( [new $action[0], $action[1]], [$data]);
        }elseif(is_string($action)){
            $action = explode('@', $action);
            call_user_func_array( [new $action[0], $action[1]], [$data]);
        }else{
            return;
        }
    }

   
}

// $routes=[
//     'get'=>[
//         '/profile'=> function(){
//             echo "profile";
//         },
//         '/home'=> [HomeController::class, 'index']   
//     ],
//     'post'=>[
//         '/login'=> [LoginController::class, 'login']
//     ]
// ]
