<?php 
require_once '../datos/DB.php';
require_once '../entidades/Familia.php';
require_once '../interfaces/IFamilia.php';

class LFamilia implements IFamilia {
    
    public function cargar() {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "SELECT * FROM familia";
        $ps = $cn->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchAll();
        $familias = array();
        foreach($filas as $f){
            $fam = new Familia();
            $fam->setIdFamilia($f[0]);
            $fam->setNombre($f[1]);
            $fam->setDescripcion($f[2]);
            array_push($familias, $fam);
        }
        return $familias;
    }
    
    public function guardar(Familia $familia) {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "INSERT INTO familia (nombre, descripcion) VALUES (:nom, :des)";
        $ps = $cn->prepare($sql);
        $ps->bindParam(':nom', $familia->getNombre());
        $ps->bindParam(':des', $familia->getDescripcion());
        return $ps->execute();
    }

    public function borrar($idFamilia) {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "DELETE FROM familia WHERE idfamilia = :id";
        $ps = $cn->prepare($sql);
        $ps->bindParam(':id', $idFamilia);
        return $ps->execute();
    }
}
?>
