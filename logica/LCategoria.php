<?php
require_once '../datos/DB.php';
require_once '../entidades/Categoria.php';
require_once '../interfaces/ICategoria.php';

class LCategoria implements ICategoria {
    public function cargar() {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "SELECT * FROM categoria";
        $ps = $cn->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchAll();
        $categorias = array();
        foreach ($filas as $f) {
            $cat = new Categoria();
            $cat->setIdCategoria($f[0]);
            $cat->setNombre($f[1]);
            $cat->setIdFamilia($f[2]);

            array_push($categorias, $cat);
        }

        return $categorias;
    }

    public function guardar(Categoria $categoria) {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "INSERT INTO categoria (nombre, idfamilia) VALUES (:nom, :idfam)";
        $ps = $cn->prepare($sql);
        $ps->bindParam(':nom', $categoria->getNombre());
        $ps->bindParam(':idfam', $categoria->getIdFamilia());

        return $ps->execute();
    }
}
?> 