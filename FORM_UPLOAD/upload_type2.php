<?php



if($_SERVER['REQUEST_METHOD']== 'POST'){

    if($_FILES['file']['error'] == 0){
        $uploaddir = 'UPLOADS/';

        $file_name = basename($_FILES["file"]["name"]);
        $target_file = $uploaddir.$file_name;

        $file_size = $_FILES["file"]["size"];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'png', 'gif', 'jpeg'];

        //checking file size
        if($file_size > 4 * 1024 * 1024){
            $file_error= "your file is too large {$file_sieze}";
        }

        // checking file type
        elseif(!in_array($file_type, $allowed_types)){
            $file_error = "only JPG, JPG, PNG and GIF are allowed";

            //if no errors, move the file to the directory
        } else{

        if(!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
            $file_error =  'the file'.basename($_FILES["file"]["name"])."has been uploaded";
        }}

       
        
    }else{
        switch($_FILES['file']['error']){
            case UPLOAD_ERR_INI_SIZE:
                echo "The uploaded files exceeds the maxium size allowed by the server";
        }
    }
    if(empty($file_error)){
        echo "the file has been uuploaded";
    } else{
        echo $file_error."<br>";
    }
}


?>