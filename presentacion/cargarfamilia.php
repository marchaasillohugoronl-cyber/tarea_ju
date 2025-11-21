<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulos de Familia</title>
</head>
<body>
    <div>
        <h1>Módulos de Familia</h1>
        <hr>
        <a href="guardarfamilia.php">Crear Nuevo</a>

        <?php 
            require_once '../entidades/Familia.php';
            require_once '../interfaces/IFamilia.php';
            require_once '../logica/LFamilia.php';

            $log = new LFamilia();
            $familias = $log->cargar();
        ?>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($familias as $fam): ?>
                    <tr>
                        <td><?= $fam->getIdFamilia() ?></td>
                        <td><?= $fam->getNombre() ?></td>
                        <td><?= $fam->getDescripcion() ?></td>
                        <td><a href="modificarfamilia.php?id=<?= $fam->getIdFamilia() ?>">Modificar</a></td>
                        <td><a href="borrarfamilia.php?id=<?= $fam->getIdFamilia() ?>">Borrar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
