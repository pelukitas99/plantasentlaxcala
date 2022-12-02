<?php

function insertarFoto(array $parametro){
  $mysqli = conectar();
  $sql = "INSERT INTO ".$parametro['tabla']." (id, foto, descripcion, estado)";
$sql.= "VALUES (NULL, \"".$parametro['foto']."\", \"".$parametro['descripcion']."\",1)";
$res = $mysqli ->query($sql);


}

function cargarFotos($parametro){
    $arreglo = array();
    $mysqli = conectar();
    $sql = "SELECT * FROM ".$parametro." WHERE estado = 1 ORDER BY id DESC LIMIT 9";
    $res = $mysqli -> query($sql);
    while ($reg = $res -> fetch_assoc()){
        $arreglo[] = $reg;
    }
    return $arreglo;
}

function editarFoto(array $parametro){
  $mysqli = conectar();
  $sql = "UPDATE ".$parametro['tabla']." SET ";
  $sql.= "foto = \"".$parametro['foto']."\", descripcion = \"".$parametro['descripcion']."\" ";
  $sql.= "WHERE id = \"".$parametro['id']."\" LIMIT 1";
  $res = $mysqli->query($sql);
}

?>