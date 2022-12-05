<?php
namespace Src\Resources;
class Base extends ViewStructure{
    // public static function getView(string $view = " ", array $data = []){
    public static function getView(){
       ob_start();
       include resource_layout_path('app.php');
       return ob_get_clean();
   }   
    public static function viewVars($baseView){
        return self::getVars($baseView, '{{', '}}')[0];
    }
}
