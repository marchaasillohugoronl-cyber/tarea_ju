<?php
     require_once '../entidades/Categoria.php';
    interface ICategoria{
        //definimos muestra firma de metodos
        public function cargar();
        public function guardar(Categoria $familia);
    }
?> 