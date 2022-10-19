<?php
$directory = "data";
//////////////////////////////////////////////////////////////////////////////////////
// copy and cut files

// copy('data/copy/mai.php','data/maioia.php');         // copy with another name
// copy('data/copy/mai.php','data/mai.php');            // copy with same name

// rename('data/cut/mai.php','data/cut/data.php');     //  cut and rename
// rename('data/cut/mai.php','data/mai.php');          // cut with same name

//////////////////////////////////////////////////////////////////////////////////////
// delete directory not empty
function is_empty_dir(string $folder):bool{
    return count(scandir($folder)) == 2 ? true : false;
}

$directoryDeleted = "data" . (DIRECTORY_SEPARATOR) . "delete";
function deletedDir( string $directoryDeleted)
{
    if (!str_ends_with($directoryDeleted, '/') || !str_ends_with($directoryDeleted, '\\')) {
        $directoryDeleted .= DIRECTORY_SEPARATOR;
    }
    $deletedFiles = scandir($directoryDeleted);
    foreach ($deletedFiles as $index => $file) {


        if ($file == '.' || $file == '..') {
            continue;
        }
        if (is_file($directoryDeleted . (DIRECTORY_SEPARATOR) . $file)) { //path

            unlink($directoryDeleted . DIRECTORY_SEPARATOR . $file); //path
        } elseif (is_dir($directoryDeleted . DIRECTORY_SEPARATOR . $file)) {
            // ?????? ريكيرجن
        }
    }

    if(is_empty_dir($directoryDeleted)){

        rmdir($directoryDeleted);
    }
}
// deletedDir($directoryDeleted);
