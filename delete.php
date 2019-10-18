<?php

session_start();
include('dbcon.php');

$id = $_REQUEST['id'];

$sql ="DELETE FROM `emply` WHERE `emply`.`id` = $id";

$save = $con->query($sql);

if ($save)
{
    $_SESSION['message'] ="<div class='alert alert-success' role='alert'>Deleted sucessfully </div>";
}else
{
    $_SESSION['message'] ="<div class='alert alert-danger' role='alert'>Deleted failed</div>";
}

header('Location:index.php')
?>