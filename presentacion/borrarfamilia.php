<?php
require_once '../datos/DB.php';
require_once '../entidades/Familia.php';
require_once '../interfaces/IFamilia.php';
require_once '../logica/LFamilia.php';

//ID borrar
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idFamilia = $_GET['id'];

    $logFamilia = new LFamilia();

    // borrar
    if ($logFamilia->borrar($idFamilia)) {
        // Redirigir al listado después de borrar
        header("Location: cargarfamilias.php");
        exit;
    } else {
        echo "Error al borrar la familia.";
    }
} else {
    echo "ID inválido.";
}
?>
