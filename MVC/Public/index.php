<?php




// absolute(path) // C:/xampp/htdocs/AdvancedCourse/MVC/vendor/autoload.php
require __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php"; 
// (new Route)->resolve() // return empty array solving by include web.php
require base_path("\Routes\web.php"); 

// dd(app());
app()->run();
app()->run();
app()->run();
app()->run();
app()->run();