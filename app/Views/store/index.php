<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.css">
    <title>Productos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('/new')?>">Agregar</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="row text-left mt-5 mb-5 ">
            <div class="col-md-4">
                <a class="btn btn-block btn-primary" target="_blank" href="<?=base_url('/export-data')?>">Exportar datos</a>
            </div>
        </div> 
        <table class="table">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Marca</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Fecha de Ingreso</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $item):?>
                    <tr>
                        <td><?=$item->nombre?></td>
                        <td><?=$item->marca?></td>
                        <td><?=$item->descripcion?></td>
                        <td><?=$item->precio?></td>
                        <td><?=$item->fecha_ingreso?></td>
                        <td>
                            <a href="<?=base_url('/view/'.$item->id)?>"><button type="button" class="btn btn-info">Ver</button></a>
                            <a href="<?=base_url('/edit/'.$item->id)?>"><button type="button" class="btn btn-warning">Editar</button></a>
                            <a href="<?=base_url('/delete/'.$item->id)?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>