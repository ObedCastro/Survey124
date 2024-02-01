<?php

require_once "conexion.php";

class ModeloWiki{

    static public function mdlMostrarwiki($tabla, $item, $valor, $base, $max){
        if($base != null || $max != null){
            $sql = "SELECT * FROM $tabla LIMIT $base, $max";
        } else{
            $sql = "SELECT * FROM $tabla";
        }

        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    //PARA REGISTRAR NUEVA ENTRADA
    static public function mdlNuevaEntrada($tabla, $datos){
        try{
            $sql = "INSERT INTO $tabla(tituloproblema, descripcionproblema, solucionproblema, reportaproblema) VALUES (:tituloproblema, :descripcionproblema, :solucionproblema, :reportaproblema)";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":tituloproblema", $datos["titulo"], PDO::PARAM_STR);
            $stmt->bindParam(":descripcionproblema", $datos["descripcion"], PDO::PARAM_STR);
            $stmt->bindParam(":solucionproblema", $datos["solucion"], PDO::PARAM_STR);
            $stmt->bindParam(":reportaproblema", $datos["reporta"], PDO::PARAM_STR);

            if($stmt->execute()){
                return "ok";
            }

        } catch(PDOExcepcion $e){
            return $e;
        }
        
    }

    //PARA MOSTRAR LAS RESPUESTAS
    static public function mdlMostrarRespuestas($tabla, $item, $valor){

        $query = Conexion::conectar()->prepare("SELECT * FROM wikicolaboraciones WHERE $item = :$item");
        $query->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $query->execute();

        if($query->fetchColumn() > 0){
            $sql = "SELECT c.*, a.nombre as nombreadmin, a.cargo as cargoadmin, a.usuario as usuario, w.* FROM $tabla c
                INNER JOIN administradores a ON c.idcolabora = a.id
                INNER JOIN wiki w ON c.idwiki = w.idwiki
                WHERE c.$item = :$item";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            if($stmt->execute()){
                return $stmt->fetchAll();
            }

        } else{
            $lol = Conexion::conectar()->prepare("SELECT w.*, a.* FROM wiki w INNER JOIN administradores a ON a.id = w.reportaproblema WHERE w.idwiki = :idwiki");
            $lol->bindParam(":idwiki", $valor, PDO::PARAM_STR);
            $lol->execute();

            return $lol->fetch();
        }
       
    }

    //PARA NUEVA COLABORACIÓN
    static public function mdlNuevaColaboracion($tabla, $datos){
        try{
            $sql = "INSERT INTO $tabla(idcolabora, idwiki, colaboracion) VALUES(:idcolabora, :idwiki, :colaboracion)";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":idcolabora", $datos["colaborador"], PDO::PARAM_STR);
            $stmt->bindParam(":idwiki", $datos["idwiki"], PDO::PARAM_STR);
            $stmt->bindParam(":colaboracion", $datos["contenido"], PDO::PARAM_STR);
            
            if($stmt->execute()){
                return "ok";
            }
        } catch(PDOException $e){
            return $e;
        }
    }

}