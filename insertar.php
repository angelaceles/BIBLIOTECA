<?php
$año_libro    = $_POST['año_libro'];
$autor_libro  = $_POST['autor_libro'];
$titulo_libro = $_POST['titulo_libro'];
$url_libro    = $_POST['url_libro'];
$espe_libro   = $_POST['espe_libro'];
$edi_libro    = $_POST['edi_libro'];

$db = mysqli_connect("localhost","root","","crud");
$sql = "INSERT INTO data(id, año_libro, autor_libro, titulo_libro, url_libro, espe_libro, edi_libro) VALUES('$id', '$año_libro', '$autor_libro', '$titulo_libro', '$url_libro', '$espe_libro', '$edi_libro')";
$rta = mysqli_query($db, $sql);

if($rta){
    Header("Location: index.php");  
}else {
    echo "No se inserto!";
}
?>