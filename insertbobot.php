<?php
include "config.php";
$idbobot = $_POST['idbobot'];
$idkriteria = $_POST['idkriteria'];
$value = $_POST['value'];

$sql="INSERT INTO bobot (idbobot,idkriteia,value) VALUES ('".$idbobot."','".$idkriteria."','".$value."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtbobot.php');
        }else{
            echo "Error";
        }
?>