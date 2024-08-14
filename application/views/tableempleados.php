<?php
include 'inc/header.php';
include 'inc/theme.php';
include 'inc/rightsidebar.php';
include 'inc/sidebarmenu.php';
?>

<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Lista de los Empleados Registrados</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th>Nro.</th>
                  <th>Nombre</th>
                  <th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Email</th>
                  <th>Telefono</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $contador = 1;
                foreach ($usuario->result() as $row) {
                  ?>
                  <tr>
                    <td><?php echo $contador; ?></td>
                    <td><?php echo $row->nombre; ?></td>
                    <td><?php echo $row->apellido1; ?></td>
                    <td><?php echo $row->apellido2; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->telefono; ?></td>

                    <!-- <td>
                      <label class="badge badge-info">On hold</label>
                    </td> -->
                    <td>
                      <?php
                      echo form_open_multipart("empleados/modificar");
                      ?>
                      <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                      <button class="btn btn-outline-success">Modificar</button>
                      <?php
                      echo form_close();
                      ?>
                    </td>
                    <td>
                    <?php
                      echo form_open_multipart("empleados/eliminarempleado");
                      ?>
                      <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                      <button class="btn btn-outline-danger">Eliminar</button>
                      <?php
                      echo form_close();
                      ?>
                    </td>
                  </tr>
                  <?php
                  $contador++;
                }
                ?>
              </tbody>
            </table>
          </div>
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