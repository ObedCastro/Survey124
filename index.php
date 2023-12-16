<?php

//CONTROLADORES
require_once "controladores/base.controlador.php";
require_once "controladores/administradores.controlador.php";

//MODELOS
require_once "modelos/administradores.modelo.php";

$base = new ControladorBase();
$base->base();