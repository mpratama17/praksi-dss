<?php
include "config.php";
$idmatrix = $_POST['idmatrix'];
$idalternatif = $_POST['idalternatif'];
$idbobot = $_POST['idbobot'];
$idskala = $_POST['idskala'];

$sql="INSERT INTO matrixkeputusan (idmatrix,idalternatif,idbobot,idskala) VALUES ('".$idmatrix."',
                                    '".$idalternatif."','".$idbobot."','".$idskala."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtmatrix.php');
        }else{
            echo "Error";
        }
        ?>