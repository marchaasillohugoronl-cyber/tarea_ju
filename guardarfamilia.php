<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dic, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Isercion de familias</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHoler="ingrese nombre">
            <input type="text" name="txtDes" placeHoler="ingrese descripcion">
            <br>
            <input type="submit" values="guardar">
           
        </form>
    </div>
</body>
</html>

<?php
    require_once 'conexion.php';
    if($_POST){
        $nom=$_POST['txtNom'];
        $des=$_POST['txtDes'];
        $sql='insert into familia (nombre, descripcion) values (:nom, :des)';
        $ps=$cn->prepare($sql);
        $ps->bindParam(':nom', $nom);
        $ps->bindParam(':des', $des);
        $ps->execute();
        header('Location: cargarfamilias.php');
    }
?>
