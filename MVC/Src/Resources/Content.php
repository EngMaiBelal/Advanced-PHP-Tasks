<?php
namespace Src\Resources;

class Content extends ViewStructure{
    // public static string $view;
    // public static array $data = [];
    // public function __construct(string $view, array $data = []){
    //     self::$view = $view;
    //     self::$data = $data;
    // }
    public static function getView(string $view, array $data = []){
        ob_start();
        // (new Content)->readableData($data); // non-static
        // Content::readableData($data);       // static
        foreach($data as $key=> $value){
            $$key = $value; // كل key حوله لvar
        }
        include resource_view_path(self::viewPathBulider($view)); // update $view by return
        return ob_get_clean();
    }

    public static function viewVars($contentView){
        $contentViewVars= self::getVars($contentView, '{{', '}}')[1];
        return Content::contentViewVarsValues($contentViewVars);
    }

    public function readableData(array $data){
        foreach($data as $key=> $value){
            $$key = $value; // كل key حوله لvar
        }
        return $$key;
    }

    public static function viewPathBulider($view){
        if(str_contains($view, '.')){
            $view = str_replace('.', ds(), $view);
        }
        return $view .='.php';
    }

    public static function contentViewVarsValues($contentViewVars){
        foreach($contentViewVars As $key=>$value){                 // push array
            $newKey= strtok($value,'=');
            $newValue = substr($value,strpos($value,'=')+1);
            $contentViewVarsValues['{{'.$newKey.'}}']= $newValue;
        }
        return $contentViewVarsValues;
    }
    
}