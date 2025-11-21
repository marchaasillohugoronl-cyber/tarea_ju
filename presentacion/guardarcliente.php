<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
</head>
<body>
    <h1>Registrar Cliente</h1>
    <form action="" method="POST">
        <input type="text" name="nombres" placeholder="Nombres" required><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required><br>
        <input type="text" name="dni" placeholder="DNI" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

<?php
require_once '../entidades/Clientes.php';
require_once '../logica/LCliente.php';

if($_POST){
    $cli = new Cliente();
    $cli->setNombres($_POST['nombres']);
    $cli->setApellidos($_POST['apellidos']);
    $cli->setDni($_POST['dni']);

    $log = new LCliente();
    $log->guardar($cli);

    header("Location: cargarclientes.php");
}
?>
