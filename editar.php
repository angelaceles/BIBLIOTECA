<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar</title>
</head>
<body>
<? 
$id           = $_GET['id'];
$año_libro    = $_GET['año_libro'];
$autor_libro  = $_GET['autor_libro'];
$titulo_libro = $_GET['titulo_libro'];
$url_libro    = $_GET['url_libro'];
$espe_libro   = $_GET['espe_libro'];
$edi_libro    = $_GET['edi_libro'];
?>
    <br>
    <br>
    <br>
    <div id="form">
        <form action="sp.editar.php" method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td>----------Ingresar Datos----------</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="id" placeholder="Codigo" value="<?=$id?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="año_libro" placeholder="Año" value="<?=$año_libro?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="autor_libro" placeholder="Autor" value="<?=$autor_libro?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="titulo_libro" placeholder="Titulo" value="<?=$titulo_libro?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="url_libro" placeholder="URL" value="<?=$url_libro?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="espe_libro" placeholder="Especialidad" value="<?=$espe_libro?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="edi_libro" placeholder="Editorial" value="<?=$edi_libro?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" target="click" onclick="return confirm('Dato Actualizado')" value="Actualizar">   
                    </td>
                </tr>
                <tr>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>