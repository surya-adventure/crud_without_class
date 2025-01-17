<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "my_crud";


$conn = new mysqli($host, $user, $password, $dbname);

if($conn){

}else{
    echo "not connected";
}
