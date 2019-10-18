<?php


session_start();
include('dbcon.php');
$id = $_REQUEST['id'];
$result = $con->query("SELECT image FROM `emply` WHERE id=".$id);

$img = $result->fetch_assoc();


$name=$_POST['name'];
$age=$_POST['age'];
$status=$_POST['status'];
$skill = implode(",",$_POST['skill']);
$country=$_POST['country'];
$country=$_POST['country'];




//file update
if (isset($_FILES['file'])){

    unlink($img['image']);

    $tempname = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    move_uploaded_file($tempname, 'upload/'.$filename);
    $file = "upload/".$_FILES['file']['name'];

}else {
    $file = $img['image'];
}

$sql ="UPDATE `emply` SET `name` = '$name',`age` = '$age',`status` = '$status',`skill` = '$skill',`country` = '$country',`image` = '$file' WHERE `emply`.`id` = '$id'";
$save = $con->query($sql);

if ($save)
{
    $_SESSION['message'] ="<div class='alert alert-success' role='alert'>Update sucessfully </div>";
}else
{
    $_SESSION['message'] ="<div class='alert alert-danger' role='alert'>Updated fail failed</div>";
}


header('Location:index.php')
?>