<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Tes Koneksi</title> -->
</head>
<body>
    
<!-- <h1>Tes</h1> -->

<?php

$host ="localhost:3306";
$username = "root";
$password = "";
$database = "metodesaw";
$conn = mysqli_connect($host, $username, $password, $database);


if($conn){
    echo "";

}else{
    echo "Error";
}

?>
</body>