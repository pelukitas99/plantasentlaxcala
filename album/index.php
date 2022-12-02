<?php require_once "app/appDbase.php"?>
<?php require_once "app/appfotos.php"?>
<?php require_once "app/appAuxiliar.php"?>
<?php $registros = cargarFotos ("tb_fotos"); ?>
<?php require_once "plantilla/header.inc"; ?>
<?php require_once "plantilla/menu.inc"; ?>
    <main role="main">
    <?php require_once "plantilla/formulario.inc"; ?>
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php require_once "plantilla/contenido.inc" ?>
          </div>
        </div>
      </div>
    </main>
<?php require_once "plantilla/footer.inc"; ?>

