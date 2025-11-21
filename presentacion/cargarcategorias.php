<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
</head>
<body>
    <h1>Cargar Categorías</h1>
    <a href="guardarcategoria.php">Crear Nueva Categoría</a>
    <hr>

    <?php
    require_once '../entidades/Categoria.php';
    require_once '../interfaces/ICategoria.php';
    require_once '../logica/LCategoria.php';
    require_once '../entidades/Familia.php';
    require_once '../logica/LFamilia.php';

    $logCategoria = new LCategoria();
    $categorias = $logCategoria->cargar();

    $logFamilia = new LFamilia();
    $familias = $logFamilia->cargar();
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Familia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categorias as $cat): ?>
                <tr>
                    <td><?= $cat->getIdCategoria() ?></td>
                    <td><?= $cat->getNombre() ?></td>
                    <td>
                        <?php
                        // Mostrar nombre de la familia
                        foreach($familias as $fam) {
                            if($fam->getIdFamilia() == $cat->getIdFamilia()) {
                                echo $fam->getNombre();
                            }
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
