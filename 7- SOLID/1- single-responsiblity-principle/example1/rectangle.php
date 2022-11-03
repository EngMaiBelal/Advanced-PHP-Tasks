<?php
include_once "shape.php";

class rectangle implements shape{
    public $length;
    public $width;
    public function getArea(){
        return $this->width*$this->length;
    }

}
?>