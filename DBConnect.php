<?php
ini_set('session.gc_maxlifetime', 3200);
session_start();

$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "blog";

$conn = mysqli_connect($SERVER , $USERNAME , $PASSWORD , $DATABASE);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    //echo "success";
}
?>