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
        foreach ($infoempleado->result() as $row) {
            ?>
            <?php
            echo form_open_multipart("empleados/modificarbd");
            ?>
            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Nombre(s)</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $row->nombre ?>" id="nombre"
                            aria-describedby="helpId" placeholder="Nombres" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Primer Apellido</label>
                        <input type="text" class="form-control" name="apellido1" value="<?= $row->apellido1 ?>"
                            id="apellido1" aria-describedby="helpId" placeholder="Primer Apellido">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Segundo Apellido</label>
                        <input type="text" class="form-control" name="apellido2" value="<?= $row->apellido2 ?>"
                            id="apellido2" aria-describedby="helpId" placeholder="Segundo Apellido">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Carnet:</label>
                        <input type="text" class="form-control" name="ci" value="<?= $row->ci ?>" id="ci"
                            aria-describedby="helpId" placeholder="CI" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Telefono:</label>
                        <input type="number" class="form-control" name="telefono" value="<?= $row->telefono ?>"
                            id="telefono" aria-describedby="helpId" placeholder="Telefono" required>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Correo Electronico:</label>
                        <input type="email" class="form-control" name="email" value="<?= $row->email ?>" id="correo"
                            aria-describedby="helpId" placeholder="Correo Electronico" required>
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