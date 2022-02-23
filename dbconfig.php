<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "guess_game";

$conn = new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error){
    die("Error: ".$conn->connect_error);
}


?>