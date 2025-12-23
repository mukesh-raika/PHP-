<?php


if($_FILES['fileUpload']){
$path = $_FILES['fileUpload']['name']; 
$upload_path = "./upload/".$path;
move_uploaded_file($_FILES['fileUpload']['tmp_name'],$upload_path)
 || die("fialed to upload");
}else{
    die("no file found");
}
?>