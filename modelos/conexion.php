<?php

class Conexion{

    static public function conectar(){
        $host = "localhost";
        $dbname = "prueba";
        $dbuser = "root";
        $dbpassword = "";

        $pdo = new PDO(
            "mysql:host=$host; dbname=$dbname",
            $dbuser,
            $dbpassword,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $pdo;
    }

}