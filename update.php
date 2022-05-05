<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nuevo</title>
</head>
<body>
    <br>
    <br>
    <br>
    <div id="form">
        <form action="insertar.php" method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td>----------Ingresar Datos----------</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="año_libro" placeholder="Año">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="autor_libro" placeholder="Autor">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="titulo_libro" placeholder="Titulo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="url_libro" placeholder="URL">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="espe_libro" placeholder="Especialidad">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="edi_libro" placeholder="Editorial">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" target="click" onclick="return confirm('Confirmar dato nuevo')" value="Registrar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>