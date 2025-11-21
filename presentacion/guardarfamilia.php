<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Insercion de Familia</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeholder="Ingrese Nombre">
            <input type="text" name="txtDes" placeholder="Ingrese Descripcion">
            <br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>
<style>
    /* Estilos generales */
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f2f2f2;
    margin: 0;
    padding: 0;
}

/* Contenedor */
div {
    width: 400px;
    background: #fff;
    margin: 50px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

/* Título */
h1 {
    text-align: center;
    color: #333;
}

/* Inputs */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
}

/* Botón */
input[type="submit"] {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background: #0056b3;
}

/* Línea */
hr {
    margin-bottom: 20px;
}

</style>
<?php 
            require_once '../entidades/Familia.php';
            require_once '../interfaces/IFamilia.php';
            require_once '../logica/LFamilia.php';
            if($_POST){
                $fam=new Familia();
                $fam->setNombre($_POST['txtNom']);
                $fam->setDescripcion($_POST['txtDes']);
                $log=new LFamilia();
                $log->guardar($fam);
                header('Location: cargarfamilias.php');
            }
            
?> 