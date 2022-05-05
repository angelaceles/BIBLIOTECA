<?php
$id = $_GET['id'];

$db = mysqli_connect("localhost","root","","crud");
$sql = "DELETE FROM data where id like $id";
$rta = mysqli_query($db, $sql);

if($rta){
    header("Location: index.php"); 
}
?>