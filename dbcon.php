<?php

$host ='localhost';
$name = 'root';
$password ='';
$dbname = 'dbname';


try{
    $con = new mysqli($host, $name, $password, $dbname);

}catch (Exception $exception)
{
    echo $exception->getMessage();
}


