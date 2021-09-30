<?php
var_dump($_FILES);

$path = "./uploads/";  //folder directory
// if (!mkdir($path, 0777, true)) {
//     die("can`t make directory");
// }

$target_file = $path . basename($_FILES['fileToUpload']['name']);  // get path to file 
// var_dump($target_file);

$upAccess = 1;   // flag, get access to upload file

$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));   //get filetype
// var_dump($fileType);

if(isset($_POST['submit'])){
    $chek = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($chek!== false){
        echo "Fails ir attels. Faila MIME:" . $chek['mime'];  //File type
        $upAccess = 1;
            }else{
                echo "Fail is not image";
                $upAccess = 0;
            }
}

//File exist

if (file_exists($target_file)){
    echo "File exist!";
    $upAccess =0;
    }

// file size

if ($_FILES['fileToUpload']['size']>500000){
    echo "File size too large";
    $upAccess = 0;
}

//File type

if($fileType != "jpg" && $fileType !="png" && $fileType !="gif"){
 echo "file type not allowed!"   ;
 $upAccess =0;
}

if($upAccess ==0){
echo "the file cannot be loaded";
}else{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
     echo "File is uploded!";
    }else{
     echo "Error";
    }
}



?>

