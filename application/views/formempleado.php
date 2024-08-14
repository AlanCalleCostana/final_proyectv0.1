<?php
include 'inc/header.php';
include 'inc/theme.php';
include 'inc/rightsidebar.php';
include 'inc/sidebarmenu.php';
?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registro de Empleados</h4>
                    <p class="card-description">
                        Aqui debes de ingresar todos los datos referentes al nuevo empleado a registrar
                    </p>
                    <?php
                    $attributes = array('class' => 'forms-sample');
                    echo form_open_multipart("Empleados/agregaremple", $attributes);
                    ?>
                    
                    <div class="form-group">
                        <label>Nombre(s)</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)" required>
                    </div>
                    <div class="form-group">
                        <label>Primer Apellido</label>
                        <input type="text" name="apellido1" class="form-control" placeholder="Primer Apellido" required>
                    </div>
                    <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input type="text" name="apellido2" class="form-control" placeholder="Segundo Apellido">
                    </div>
                    <div class="form-group">
                        <label>Cedula de Identidad</label>
                        <input type="text" name="ci" class="form-control" placeholder="CI" required>
                    </div>
                    <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" name="email" class="form-control" placeholder="Correo Electronico" required>
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" name="telefono" class="form-control" placeholder="Telefono" required>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Ingrese el usuario en minusculas" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Registrar</button>
                    <button class="btn btn-light">Cancelar</button>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©INCOS 2024 <a
                    href="#">Antony</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                    class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>

<?php
include 'inc/footer.php';