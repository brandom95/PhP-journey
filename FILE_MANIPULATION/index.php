<?php 

$directory = "upload";

if(is_dir($directory)){
    $files = scandir($directory);
    foreach ($files as $file){
        if($file !== "." && $file !== ".."){
            echo "File: $file\n" . "<br>";
        }
    }
}

//creating directories
/* 
$directory = "upload";
if(!file_exists($directory)){
    mkdir($directory, 0777, true);
    echo "directory created";
}else{
    echo "directory already exist";
}
*/
// delete file
/*
$deletingFile = "data.txt";


if(file_exists($deletingFile)){
    unlink($deletingFile);
    echo "File deleted";
}else{
    echo"File not found";
}

*/

// date time modification time 
/* 

$old_name = "data.txt";
$new_name = "newTest.txt";

if(file_exists($old_name)){
    rename($old_name, $new_name);
    echo "File renamed";
}else{
    echo"File not found";
}
*/
// date time modification time 
/* 
$file_name = "data.txt";
if(file_exists($file_name)){
    echo "File size: ".filesize($file_name)."bytes \n";
    echo "Last modified: ".date("F d Y H:i:s.", filemtime($file_name))."\n";

    if(is_readable(($file_name))){
        echo "it is readeable \n";
    }

    if(is_writable($file_name)){
        echo "is writeable \n";
    }else{
        echo "File doesnt exist";
    }
}
*/
// write file and append  
/* 

$file_name = "data.txt";

$file = fopen($file_name,"a");

if($file){
    fwrite($file, "text for testing 5\n");
    fclose($file);
    echo"File written successfully";
} else{
    echo"Unable to write file";
}

*/
//read/open only 

/*
$content = file_get_contents("readme.txt");
echo nl2br($content);
*/

// If want to modify the file

/*
$file_name = "readme.txt";

$file = fopen($file_name,"r");
if($file){
    $content = fread($file, filesize($file_name));
    echo nl2br($content);
    fclose($file);
} else{
    echo"Unable to open file";
}
*/
?>