<?php
require_once '../entidades/Familia.php';

interface IFamilia {
    public function cargar();
    public function guardar(Familia $familia);
}
?>
