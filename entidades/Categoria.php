
<?php
class Categoria {
    private $idcategoria;
    private $nombre;
    private $idfamilia;

    // Getter y Setter para idcategoria
    public function getIdCategoria() {
        return $this->idcategoria;
    }

    public function setIdCategoria($idcategoria) {
        $this->idcategoria = $idcategoria;
    }

    // Getter y Setter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter y Setter para idfamilia
    public function getIdFamilia() {
        return $this->idfamilia;
    }

    public function setIdFamilia($idfamilia) {
        $this->idfamilia = $idfamilia;
    }
}
?>
