<?php
if(isset($_POST['submit']))
{
   
   

    $fileName = $_FILES['File']['name'];
    $fileTmpName = $_FILES['File']['tmp_name'];
    $fileSize = $_FILES['File']['size'];
    $fileError = $_FILES['File']['error'];
    $fileType = $_FILES['File']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');


    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                  $fileNameNew = uniqid('', true).".".$fileActualExt;  
                  $fileDestination = 'uploads/'.$fileNameNew;
                  move_uploaded_file($fileTmpName, $fileDestination);
                  header("Location: upload.html?upload succcess");
            }else    echo "your file is too big!";
         
        }else
        {
            echo "There was an error uploading this file";
        }

    }else{
        echo "You cannot upload files of this type!";
    }

}
?>
