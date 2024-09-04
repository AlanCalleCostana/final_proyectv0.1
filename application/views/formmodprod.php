<!doctype html>
<html lang="en">

<head>
    <title>Tu cuenta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    
    <h1 class="text-center">Modificar admin</h1>
    
        <?php
        foreach ($infoproducto->result() as $row) {
            ?>
            <?php
            echo form_open_multipart("producto/modificarbd");
            ?>
            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Modelo:</label>
                        <input type="text" class="form-control" name="modelo" value="<?= $row->modelo ?>" id="nombre"
                            aria-describedby="helpId" placeholder="Nombres" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Marca</label>
                        <input type="text" class="form-control" name="marca" value="<?= $row->marca ?>"
                            aria-describedby="helpId" placeholder="Primer Apellido">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Almacenamieto:</label>
                        <input type="text" class="form-control" name="almacenamiento" value="<?= $row->almacenamiento ?>"
                             aria-describedby="helpId" placeholder="Segundo Apellido">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">RAM:</label>
                        <input type="text" class="form-control" name="ram" value="<?= $row->ram ?>" id="ci"
                            aria-describedby="helpId" placeholder="CI" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">CPU:</label>
                        <input type="text" class="form-control" name="cpu" value="<?= $row->cpu ?>"
                            id="telefono" aria-describedby="helpId" placeholder="CPU" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">GPU:</label>
                        <input type="text" class="form-control" name="gpu" value="<?= $row->gpu ?>"
                            aria-describedby="helpId" placeholder="Correo Electronico" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Cantidad:</label>
                        <input type="text" class="form-control" name="cantidad" value="<?= $row->stock ?>"
                            aria-describedby="helpId" placeholder="Cantidad" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Categoria:</label>
                        <input type="text" class="form-control" name="categoria" value="<?= $row->categoria ?>"
                            aria-describedby="helpId" placeholder="Categoria" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="text" class="form-control" name="precio" value="<?= $row->precio ?>"
                            aria-describedby="helpId" placeholder="Ingrese el precio en Bolivianos" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar Datos</button>

            <?php
            echo form_close();
        }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>