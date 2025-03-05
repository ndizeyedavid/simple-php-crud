<?php

$hostAddress = "localhost";
$userName = "root";
$password = "";
$database = "RDL";

$con = mysqli_connect($hostAddress, $userName, $password, $database);

if (!$con) {
    die("Connection failed");
}
