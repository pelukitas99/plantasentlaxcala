 <?php foreach ($registros as $key => $registro): ?>
 <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/images/<?php echo $registro['foto'] ?>" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><?php echo $registro['descripcion'] ?> </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="collapse" data-target="#from-<?php echo $registro['id']; ?>" aria-expanded="false" aria-control="from-<?php echo $registro['id']; ?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-trash"></i></button>
                    </div>
                  </div>
<form class="form-horizontal collapse" id="from-<?php echo $registro['id']; ?>" roles="form" method="post" enctype="multipart/form-data">
<br>
    <div class="form-group">
    <textarea class="form-control" name="txt_descripcion" maxlength="140"><?php echo $registro['descripcion'] ?></textarea>
    </div>
    <div class="form-group">
    <div class="btn btn-primary btn-block btn-file">
    <i class="fa fa-picture-o"></i> Elegir imagen
    <input type="file" name="foto">
    </div>
    </div>
    <input type="hidden" name="op" value="upd">
    <input type="hidden" name="id" value="<?php echo $registro ['id']; ?>">
    <input type="hidden" name="foto_db" value="<?php echo $registro ['foto']; ?>">
    <button type="submit" class="btn btn-success btn-block my-2 color"><i class="fa fa-plus-circle"></i> Actualizar </button>
    </form>

                </div>
              </div>
            </div>
<?php endforeach; ?>