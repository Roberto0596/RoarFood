<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/inventario.controlador.php";
require_once "controladores/movimientos.controlador.php";
require_once "controladores/almacen.controlador.php";
require_once "controladores/apartados.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/inventario.modelo.php";
require_once "modelos/movimientos.modelo.php";
require_once "modelos/almacen.modelo.php";
require_once "modelos/apartados.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
