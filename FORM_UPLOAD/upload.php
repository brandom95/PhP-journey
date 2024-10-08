<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){

    
        $uploaddir = 'UPLOADS/';

//         if(!is_dir($uploaddir)){
//             mkdir($uploaddir,0777,true);
//         }
// }

foreach ($_FILES['files']['name'] as $key => $file_name){
    $file_tmp = $_FILES['files']['tmp_name'][$key];
    $file_size = $_FILES['files']['size'][$key];
    $file_error = $_FILES['files']['error'][$key];
    $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $target_file = $uploaddir.basename($file_name);

    if($file_error === UPLOAD_ERR_OK){
        if($file_size > 5 * 1024 * 1024){
            echo "Error too big";
        }elseif(!in_array($file_type,['jpg','jpeg','png','pdf'])){
            echo "Error file type $file_name is invalid";
        }else{
            if(move_uploaded_file($file_tmp,$target_file)){
                echo "File {$file_name} uploaded successfully ";
                
             //error if statement   
            }else{
                echo "Error: there was an issue uploading ";
            }
        }
        //for loop error check
    }else{
        echo "Error: the file {$file_name} failed to upload due to error" ; 
    }
}


}
?>