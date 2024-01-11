<?php

//CONTROLADORES
require_once "controladores/base.controlador.php";
require_once "controladores/administradores.controlador.php";
require_once "controladores/inicio.controlador.php";
require_once "controladores/dispositivos.controlador.php";
require_once "controladores/sedes.controlador.php";
require_once "controladores/consultores.controlador.php";
require_once "controladores/asignaciones.controlador.php";
require_once "controladores/marcas.controlador.php";
require_once "controladores/modelos.controlador.php";
require_once "controladores/tipos.controlador.php";
require_once "controladores/faltantes.controlador.php";

//MODELOS
require_once "modelos/administradores.modelo.php";
require_once "modelos/inicio.modelo.php";
require_once "modelos/dispositivos.modelo.php";
require_once "modelos/sedes.modelo.php";
require_once "modelos/consultores.modelo.php";
require_once "modelos/asignaciones.modelo.php";
require_once "modelos/marcas.modelo.php";
require_once "modelos/modelos.modelo.php";
require_once "modelos/tipos.modelo.php";
require_once "modelos/faltantes.modelo.php";

$base = new ControladorBase();
$base->base();