<?php
# Task
# check if dir is exists or not
# if not make directory
# save it to variable
# create two files inside this directory
# assign this files to variables
# change tha mode of one file to be read only
# check if file is writable
# if writable put some code
# include this file

$directory = 'Admins';
$pathFile1 =('Admins'.DIRECTORY_SEPARATOR.'file1.txt');
$pathFile2 =('Admins'.DIRECTORY_SEPARATOR.'file2.txt');


if(! file_exists($directory)){
    mkdir('Admins');
}
chmod($pathFile2,0600); // readonly

file_put_contents($pathFile1,'Do It!');
file_put_contents($pathFile2,'<?php echo "Hello World!";');


chmod($pathFile1,0600); // read & write
chmod($pathFile2,0444); // readonly

if(is_writable($pathFile2)){
    file_put_contents($pathFile2,'<?php echo "Hello guys!";'); 
}
if(is_writable($pathFile1)){
    file_put_contents($pathFile1,'Do Another Thing!');
    
}
include $pathFile2;
echo '<br/>';
include $pathFile1;