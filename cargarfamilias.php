<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Modulos de Familia</h1>
        <hr>
        <a href="guardarfamilia.php">Crear Nuevo</a>
        <?php 
            require_once 'conexion.php';
            $sql='select * from familia'; // consulta
            $ps= $cn->prepare($sql);
            $ps->execute();// ejecucion de la consulta
            $filas= $ps->fetchAll();//jala todo los registros de la consulata
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>modificar</th>
                    <th>borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php //recorrer tablas con estas variables
                   foreach($filas as $f){//array
                ?>
                <tr>
                    <td><?=$f[0]?></td>
                    <td><?=$f[1]?></td>
                    <td><?=$f[2]?></td>
                    <td><a href="modificarfamilia.php">modificar</a></td>
                    <td><a href="borrarfamilia.php?idfam=<?=$f[0]?>">borrar</a></td>

                </tr>
                <?php 
                   }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php 
?> 