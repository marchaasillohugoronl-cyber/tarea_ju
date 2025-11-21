<?php
require_once '../datos/DCliente.php';
require_once '../interfaces/ICliente.php';

class LCliente implements ICliente {

    public function guardar(Cliente $cli) {
        $data = new DCliente();
        return $data->guardar($cli);
    }

    public function listar() {
        $data = new DCliente();
        return $data->listar();
    }
}
?>
