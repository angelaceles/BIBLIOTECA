<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style2.css">
    <title>BIBLIOTECA</title>
</head>
<body>
    <h1>BIBLIOTECA VIRTUAL</h1>
    <div id="id">
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
        </form>
        <br>
        <br>
        <form action="update.php" method="post">
            <input type="submit" target="click" onclick="return confirm('Desea agregar un nuevo Dato')"alt="" value="Nuevo Dato"> 
        </form>
    </div>
    <br>
    <br>
    
    <div>
        <table>
            <tr>
                <td>Codigo</td>
                <td>Año</td>
                <td>Autor</td>
                <td>Titulo</td>
                <td>URL</td>
                <td>Especialidad</td>
                <td>Editorial</td>
                <td>Funciones</td>
            </tr>
            <?php 
                $db  = mysqli_connect("localhost","root","","crud");
                $sql = "SELECT id, año_libro, autor_libro, titulo_libro, url_libro, espe_libro, edi_libro FROM data order by id desc";
                $rta = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($rta)) {
                ?>
                <tr>
                    <td><?php echo $row['0']; ?></td>
                    <td><?php echo $row['1']; ?></td>
                    <td><?php echo $row['2']; ?></td>
                    <td><?php echo $row['3']; ?></td>
                    
                    <td><a href="<?php echo $row['4']; ?>"target="click" onclick="return confirm('Viaje a la pagina')"alt=""><?php echo $row['4']?></a></th>
                    
                    <td><?php echo $row['5']; ?></td> 
                    <td><?php echo $row['6']; ?></td>

                    <td>
                        <a href="editar.php?
                        id=<?php echo $row['0']?> &
                        año_libro=<?php echo $row['1']?> &
                        autor_libro=<?php echo $row['2']?> &
                        titulo_libro=<?php echo $row['3']?> &
                        url_libro=<?php echo $row['4']?> &
                        espe_libro=<?php echo $row['5']?> &
                        edi_libro=<?php echo $row['6']?> 
                        ">Editar</a>
                        <a href="eliminar.php? id=<?php echo $row['0']?>">Eliminar</a>
                    </td>
                                                              
                </tr>
                <?php    
                }
                ?>
        </table>
    </div>
</body>
</html>