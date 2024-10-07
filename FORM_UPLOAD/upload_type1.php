<?php



if($_SERVER['REQUEST_METHOD']== 'POST'){

    if($_FILES['file']['error'] == 0){
        $uploaddir = 'UPLOADS/';

        $file_name = basename($_FILES["file"]["name"]);
        $target_file = $uploaddir .$file_name;
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
            echo 'the file'.basename($_FILES["file"]["name"])."has been uploaded";
        }else{
            echo"the file was not uploaded, there was an error";
        };

        
    }
}


?>