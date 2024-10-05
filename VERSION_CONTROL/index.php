<?php 

$file_name = "data.txt";

$file = fopen($file_name,"w");

if($file){
    fwrite($file, "text for test\n");
    fclose($file);
    echo"File written successfully";
} else{
    echo"Unable to write file";
}


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