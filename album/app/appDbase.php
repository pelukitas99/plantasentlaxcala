<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "db_album");

function conectar(){
    $obj = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $obj->set_charset("utf8");
    if($obj ->connect_errno){
        header("Location:404.html", true, 301);
        exit;
    } else {
        return $obj;
    }
}

?>