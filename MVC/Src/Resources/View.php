<?php

namespace Src\Resources;

use Src\Resources\Content;
use Src\Resources\Base;

class View{
    public static function make(string $view, array $data = []){ 
        $baseView = Base::getView();
        // new Content($view, $data);
        $contentView = Content::getView($view, $data);
        echo self::mixer($baseView, $contentView);
    }
    
    public static function makeError(string|int $statusCode){ 
        $path= resource_error_path("{$statusCode}.php");
        if(file_exists($path)){
            include $path;
        }else{
            throw new \Exception("$statusCode Error View  not found in".resource_error_path());
        }
    }
    
    public static function mixer($baseView, $contentView){
        $baseViewVars = Base::viewVars($baseView);
        $contentViewVars = Content::viewVars($contentView);
        for($i=0 ; $i < count($baseViewVars); $i++){
            // ?? '' // if var didnot exist in contentView ---> no error
            $baseView= (str_replace($baseViewVars[$i], $contentViewVars[$baseViewVars[$i]] ?? '', $baseView)); 
        }
        return $baseView;            
    }
}

