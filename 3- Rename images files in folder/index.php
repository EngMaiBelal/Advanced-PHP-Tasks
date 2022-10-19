<?php 

// copy('data/cut/data.php','data/new-hello.php');

// rename('img/new-user.php','img/cut/data.php');

$imgFiles= scandir('img');
// $counter= 1;
array_shift($imgFiles); // delete .
array_shift($imgFiles); // delete ..

// unset(....);// هتمسحلي والاندكس هيكون ملخبط

foreach($imgFiles as $index => $file){
   
    // **********************************************************************
    // **** the numbers not ordinary because rename need time  **** //
    // rename('img'.DIRECTORY_SEPARATOR.$file , 'img'.DIRECTORY_SEPARATOR.$counter.'.jpg');
    // $counter++;

    rename('img'.DIRECTORY_SEPARATOR.$file , 'img'.DIRECTORY_SEPARATOR.$index .'.jpg');
}
?>

