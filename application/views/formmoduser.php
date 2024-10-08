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
    <br><br>
    <h1>Modificar admin</h1>
    <br>


    <?php
    foreach ($infoadmin->result() as $row) {
        ?>
        <?php
        echo form_open_multipart("estudiante/modificarbd");
        ?>
        <input type="hidden" name="idestudiante" value="<?php echo $row->id; ?>">
        <input type="text" class="form-control" name="nombre" placeholder="Escribe nombre"
            value="<?php echo $row->nombre; ?>" required>
        <input type="text" class="form-control" name="apellido1" placeholder="Escribe apellido paterno" minlength="3"
            maxlength="20" value="<?php echo $row->apellido1; ?>" required>
        <input type="text" class="form-control" name="apellido2" placeholder="Escribe apellido materno"
            value="<?php echo $row->apellido2; ?>" required>
        <input type="number" min="0" max="100" class="form-control" name="nota" placeholder="Escribe tu correo"
            value="<?php echo $row->email; ?>" required>
        <button type="submit" class="btn btn-success">Modificar estudiante</button>

        <?php
        echo form_close();
    }
    ?>

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

</html>