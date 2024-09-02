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
                    <h4 class="card-title">Registro de Ventas</h4>
                    <p class="card-description">
                        Aqui debes de ingresar todos los datos referentes para realizar la venta laptops
                    </p>
                    <?php
                    $attributes = array('class' => 'forms-sample');
                    echo form_open_multipart("venta/venderbd", $attributes);
                    ?>
                    <div class="form-group">
                        <label for="exampleSelectPrimary">Marca</label>
                        <select name="idmarca" class="form-control border-primary" id="exampleSelectPrimary" required>
                            <option value="" disabled selected>Seleccione la marca de laptop...</option>
                            <?php
                            foreach ($infoproductos->result() as $row) {
                                ?>
                                <option value="<?php echo $row->id ?>"><?php echo $row->marca ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectPrimary">Modelo</label>
                        <select name="id" class="form-control border-primary" id="exampleSelectPrimary" required>
                            <option value="" disabled selected>Seleccione el modelo laptop...</option>
                            <?php
                            foreach ($infoproductos->result() as $row) {
                                ?>
                                <option value="<?php echo $row->id ?>"><?php echo $row->modelo ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" require>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Realizar Venta</button>
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