<?php
    class DB{
        public function conectar(){
               #COMPONENTE REUTILIZABLE PARA NUESTROS MÓDULOS PHP
            $url='mysql:host=localhost; dbname=ventasdbaqp';
            $user='root';
            $password='';
            $cn=new PDO($url, $user, $password);
            return $cn;
        }
    }

?>