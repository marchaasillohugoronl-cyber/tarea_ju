<?php
require_once '../logica/LCliente.php';

$log = new LCliente();
$lista = $log->listar();
?>

<h1>Listado de Clientes</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>DNI</th>
    </tr>

    <?php foreach ($lista as $row): ?>
    <tr>
        <td><?= $row['IDCLIENTE'] ?></td>
        <td><?= $row['NOMBRES'] ?></td>
        <td><?= $row['APELLIDOS'] ?></td>
        <td><?= $row['DNI'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
