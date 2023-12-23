<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','org');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registred_orgs(username, password)
    values(?, ?)");
    $stmt->bind_param("ss",$username, $password);
    $stmt->execute();
    echo "Welcome! Add requests.";
    $stmt->close();
    $conn->close();
}


?>