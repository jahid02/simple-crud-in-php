<?php

session_start();
include('dbcon.php');

$name=$_POST['name'];
$age=$_POST['age'];
$status=$_POST['status'];
$skill = implode(",",$_POST['skill']);
$country=$_POST['country'];
$country=$_POST['country'];


//file upload
$tempname = $_FILES['file']['tmp_name'];
$filename = $_FILES['file']['name'];

move_uploaded_file($tempname, 'upload/'.$filename);

$file = "upload/".$_FILES['file']['name'];


$sql="INSERT INTO `emply` (`name`, `age`, `status`, `skill`, `country`, `image`)
 VALUES ('$name', '$age', '$status', '$skill,', '$country', '$file');";

$save = $con->query($sql);


if ($save)
{
    $_SESSION['message'] ="<div class='alert alert-success' role='alert'>Employe added sucessfully </div>";
}else
{
    $_SESSION['message'] ="<div class='alert alert-danger' role='alert'>Employe added failed</div>";
}


header('Location:index.php')
?>