<?php
namespace Src\Resources;
Abstract class ViewStructure{
    // abstract public static function getView();
    abstract public static function viewVars($View);
    public static function getVars($str, $startWord, $endWord){     // getStringBetweenTwoStrings
            preg_match_all("/$startWord((.|\r\n)*?)$endWord/", $str, $matches); 
            return $matches;
    }
}



