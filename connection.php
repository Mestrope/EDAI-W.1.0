<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "edai";

$connec = mysqli($servername,$username,$password,$dbname);

if($connec)
{
    echo "connection to waqass database ok";
}
else {
    echo "connection to waqass FAILED".mysqli_connect_error();
}
?>