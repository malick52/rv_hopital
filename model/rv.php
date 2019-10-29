
<?php
  require"connexionn.php";
function delite($idp){
$sql="DELETE FROM rv WHERE id_rv =$idp ";
$conn->query($sql);
}
function add($Heur,$Date,$Lieu)
{
    $sql="INSERT INTO patient VALUES(NULL,'$Heure','$Date','$Lieu') ";
    $conn->querry($sql);
}
