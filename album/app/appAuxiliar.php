<?php

function depurar($param){
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}
/*
    ["name"] 
    ["type"]
    ["tmp_name"]
*/
$alertas[] ="";
if(isset($_POST['op']) && $_POST['op'] == 'add'){
   
    $foto = $_FILES['foto']['name'];

    if(empty($foto)){
        $alertas[] = '<div class="alert alert-warning">
        <a href="" class="close" data-dismiss="alert">&times</a>
        <strong>Ups!!</strong> aun no has seleccionado la imagen para Publicar 
        </div>';
    
    } else {
      //[foto].[png]
      $foto = explode(".",$_FILES['foto']['name']);
      $nombre = $foto[0];
      $extension = $foto[1];
      $fotoGuardar = $nombre.time().".".$extension;
      $ruta = "assets/images/".$fotoGuardar;
      $tipo = $_FILES['foto']['type'];
      
      
      if($tipo == 'image/png' || $tipo == 'image/jpg' || $tipo == 'image/jpeg'){
        move_uploaded_file($_FILES['foto']['tmp_name'], $ruta );
        $param =array('tabla' => 'tb_fotos', 'foto' => $fotoGuardar,
                      'descripcion' => $_POST['txt_descripcion']);
        insertarFoto($param);              
        $alertas[] = '<div class="alert alert-warning">
        <a href="" class="close" data-dismiss="alert">&times</a>
        <strong>EXITO!!</strong> Tu foto a sido publicada correctamente
        </div>';
      
      } else{
        $alertas[] = '<div class="alert alert-warning">
        <a href="" class="close" data-dismiss="alert">&times</a>
        <strong>Ups!!</strong> Archivo seleccionado no es una imagen.
        </div>';
      }
    }
}

if(isset($_POST['op']) && $_POST['op'] == 'upd'){

  $foto = $_FILES['foto']['name'];

  if(empty($foto)){
    $fotoGuardar = $_POST['foto_db'];
    $param = array ('tabla' => 'tb_fotos', 'foto' => $fotoGuardar,
                    'descripcion' => $_POST['txt_descripcion'], 'id' => $_POST['id']);
      editarFoto($param);
      $alertas[] = '<div class="alert alert-warning">
      <a href="" class="close" data-dismiss="alert">&times</a>
      <strong>EXITO!!</strong> Tu publicacion e actualizo con exito
      </div>';
  } else {

    $foto = explode(".",$_FILES['foto']['name']);
    $nombre = $foto[0];
    $extension = $foto[1];
    $fotoGuardar = $nombre.time().".".$extension;
    $ruta = "assets/images/".$fotoGuardar;
    $tipo = $_FILES['foto']['type'];

    if($tipo == 'image/png' || $tipo == 'image/jpg' || $tipo == 'image/jpeg'){
      unlink("assets/images/".$_POST['foto_db']);
      move_uploaded_file($_FILES['foto']['tmp_name'], $ruta );
      $param = array ('tabla' => 'tb_fotos', 'foto' => $fotoGuardar,
      'descripcion' => $_POST['txt_descripcion'], 'id' => $_POST['id']);
      editarFoto($param);              
      $alertas[] = '<div class="alert alert-warning">
      <a href="" class="close" data-dismiss="alert">&times</a>
      <strong>EXITO!!</strong> Tu publicacion e actualizo con exito
      </div>';
    
    } else{
      $alertas[] = '<div class="alert alert-warning">
      <a href="" class="close" data-dismiss="alert">&times</a>
      <strong>Ups!!</strong> Archivo seleccionado no es una imagen.
      </div>';
    }


  }
}


?>