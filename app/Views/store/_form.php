<form action="<?=$accion?>" method="<?=$method?>" class="form   mt-4">
    <?= csrf_field() ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$model == null ? '' : $model->nombre?>">
                <small id="nombre-help" class="form-text text-muted">Nombre del producto.</small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca" value="<?=$model == null ? '' : $model->marca?>">
                <small id="marca-help" class="form-text text-muted">Marca del producto.</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion"><?=$model == null ? '' : $model->descripcion?></textarea>
                <small id="descripcion-help" class="form-text text-muted">Descripcion del producto</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="precio">Precio</label>
                <textarea class="form-control" name="precio" id="precio"><?=$model == null ? '' : $model->precio?></textarea>
                <small id="precio-help" class="form-text text-muted">Precio del producto</small>
            </div>
        </div>
        <div class="col-md-6">
            <button class="btn btn-block btn-success mt-5"><?=$model == null ? 'Guardar' : 'Actualizar'?></button>
        </div>
    </div>
</form>