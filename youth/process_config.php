<?php
$conn = mysqli_connect('localhost', 'root', '','prcs_reg');
if (!$conn){
    die('Could not connect: ' . mysqli_error());
}

$username = "root";
$password = "";
$database = "prcs_reg";
$server = "localhost";
?>