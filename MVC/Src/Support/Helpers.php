<?php

use Src\Application;
use Src\Resources\View;
///////////////////////////////////////////////
// Handle Url Slash

// if(! function_exists('url_slash_handle') ){ // to avoid repeating helper name
//     function url_slash_handle(string $url){
//         if(str_starts_with($url, '/')){
//             $url = '/' . $url;
//         }
//         return $url;
//     }
// }

if(! function_exists('url_slash_handle') ){
    function url_slash_handle(?string &$url) :void{
        // call by referance &  ||  global $url;
        if(! str_starts_with($url, '/')){
            $url = '/' . $url;
        }
    }
}

// $url = 'login';            // global
// url_slash_handle($url );   // local
////////////////////////////////////////////////////////////////
if(! function_exists('path_slash_handle')){
    function path_slash_handle(?string &$path) { // local
        if(! str_starts_with($path,ds())){
            $path = str_replace('/',ds(),ds() . $path);
        }
        return $path;
    }
}


if(! function_exists('ds')){
    function ds():string {
        return DIRECTORY_SEPARATOR;
    }
}
/////////////////////////////////////////////////////////////////
// بدايه المشروع // C:\xampp\htdocs\AdvancedCourse\MVC\Src\Support\..\..

if(! function_exists('base_path')){
    function base_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().path_slash_handle($path);
    }
}
///////////////////////////////////////////////////////////////////
if(! function_exists('public_path')){
    function public_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().'Public'.path_slash_handle($path);
    }
}

if(! function_exists('resources_path')){
    function resources_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().'Resources'.path_slash_handle($path);
    }
}
if(! function_exists('resource_layout_path')){
    function resource_layout_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().'Resources'.ds().'Layouts'.path_slash_handle($path);
    }
}
if(! function_exists('resource_component_path')){
    function resource_component_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().'Resources'.ds().'Components'.path_slash_handle($path);
    }
}
if(! function_exists('resource_error_path')){
    function resource_error_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().'Resources'.ds().'Errors'.path_slash_handle($path);
    }
}
if(! function_exists('resource_view_path')){
    function resource_view_path($path = null) :string {
        return __DIR__.ds().'..'.ds().'..'.ds().'Resources'.ds().'Views'.path_slash_handle($path);
    }
}


if(! function_exists('view')){
    function view(string $view,array $data =[]){
        View::make($view, $data);
    }
}
// if(! function_exists('readableData')){
//     function readableData(array &$data =[]){
//         foreach($data as $key=> $value){
//             $$key = $value;
//         }
//     }
// }


if(! function_exists('abort')){
    function abort(int|string $statusCode){
        View::makeError($statusCode);
    }
}

if(! function_exists('env')){
    function env($key, $default=null){
        return $_ENV[$key] ?? $default; 
    }
}
if(! function_exists('app')){
    function app(){
        // $application =null;
        // if(! $application){
        //     $application = Application::getInstance();
        // }
        // return $application; 
            return Application::getInstance();

    }
}
