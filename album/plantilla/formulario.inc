<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Agregar imagen</h1>
    <p class="lead text-muted"> hola </p>
    <form class="form-horizontal" roles="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <?php foreach($alertas as $alertas): ?>
    <?php echo $alertas; ?>
    <?php endforeach; ?>
    <div class="form-group">
    <textarea class="form-control" name="txt_descripcion" maxlegth="140"></textarea>
    </div>
    <div class="from-group">
    <div class="btn btn-danger btn-block btn-file">
    <i class="fa fa-picture-o"></i> Elegir imagen
    <input type="file" name="foto">
    </div>
    </div>
    <input type="hidden" name="op" value="add">
    <button type="submit" class="btn btn-warning btn-block my-2 color"><i class="fa fa-plus-circle"></i> Publicar</button>
    </form>
  </div>
</section>
