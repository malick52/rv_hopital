<?php
  require"connexionn.php";
function delite($idp){
$sql="DELETE FROM domaine WHERE id_domaine =$idp ";
$conn->query($sql);
}
function add($Nom)
{
    $sql="INSERT INTO domaine VALUES(NULL,'$Nom') ";
    $conn->querry($sql);
}