<?php
include "config.php";
$idalternatif = $_POST['idalternatif'];
$nmalternatif = $_POST['nmalternatif'];

$sql="INSERT INTO alternatif (idalternatif,nmalternatif) VALUES ('".$idalternatif."','".$nmalternatif."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtalternatif.php');
        }else{
            echo "Error";
        }
?>