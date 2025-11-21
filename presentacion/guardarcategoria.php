<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inserción de Categorías</title>
</head>
<body>
<div>
    <?php
    require_once '../entidades/Familia.php';
    require_once '../entidades/Categoria.php';
    require_once '../interfaces/IFamilia.php';
    require_once '../interfaces/ICategoria.php';
    require_once '../logica/LFamilia.php';
    require_once '../logica/LCategoria.php';

    $log = new LFamilia();
    $familias = $log->cargar();

    if ($_POST) {
        $categoria = new Categoria();
        $categoria->setNombre($_POST['txtNom']);
        $categoria->setIdFamilia($_POST['cbxFam']);

        $logCategoria = new LCategoria();
        $logCategoria->guardar($categoria);

        header("Location: cargarcategorias.php");
        exit;
    }
    ?>

    <h1>Inserción de Categorías</h1>
    <hr>
    <form action="" method="post">
        <input type="text" name="txtNom" placeholder="Ingrese Nombre" required>
        <br><br>
        <select name="cbxFam" required>
            <option value="0">Seleccione</option>
            <?php foreach ($familias as $f): ?>
                <option value="<?= $f->getIdFamilia() ?>"><?= $f->getNombre() ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Guardar">
    </form>
</div>
</body>
</html>
