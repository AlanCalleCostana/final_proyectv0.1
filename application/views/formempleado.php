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
                    echo form_open_multipart("PageAdmin/agregarproductobd", $attributes);
                    ?>
                    
                    <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" name="modelo" class="form-control" placeholder="Modelo" require>
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" name="marca" class="form-control" placeholder="Marca" require>
                    </div>
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input type="text" name="almacenamiento" class="form-control" placeholder="Almacenamiento" require>
                    </div>
                    <div class="form-group">
                        <label>RAM</label>
                        <input type="text" name="ram" class="form-control" placeholder="RAM" require>
                    </div>
                    <div class="form-group">
                        <label>CPU</label>
                        <input type="text" name="cpu" class="form-control" placeholder="CPU" require>
                    </div>
                    <div class="form-group">
                        <label>GPU</label>
                        <input type="text" name="gpu" class="form-control" placeholder="GPU" require>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" require>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <input type="text" name="categoria" class="form-control" placeholder="Categoria" require>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="precio" class="form-control" placeholder="Almacenamiento" require>
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