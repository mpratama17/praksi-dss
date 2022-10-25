<?php
include "config.php";
$idkriteria = $_POST['idkriteria'];
$nmkriteria = $_POST['nmkriteria'];

$sql="INSERT INTO kriteria (idkriteria,nmkriteria) VALUES ('".$idkriteria."','".$nmkriteria."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtkriteria.php');
        }else{
            echo "Error";
        }
 ?>