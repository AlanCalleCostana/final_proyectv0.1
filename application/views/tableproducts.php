<?php
include 'inc/header.php';
include 'inc/theme.php';
include 'inc/rightsidebar.php';
include 'inc/sidebarmenu.php';
?>

<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Lista de los Productos Registrados</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th>Nro.</th>
                  <th>Modelo</th>
                  <th>Marca</th>
                  <th>Alamcenamiento</th>
                  <th>RAM</th>
                  <th>Cantidad</th>
                  <th>CPU</th>
                  <th>GPU</th>
                  <th>Categoria</th>
                  <th>Precio Bs.</th>
                </tr>
              </thead>
              <?php
              $contador = 1;
              foreach ($producto->result() as $row) {
                ?>
                <tr>
                  <td><?php echo $contador; ?></td>
                  <td><?php echo $row->modelo; ?></td>
                  <td><?php echo $row->marca; ?></td>
                  <td><?php echo $row->almacenamiento; ?></td>
                  <td><?php echo $row->ram; ?></td>
                  <td><?php echo $row->stock; ?></td>
                  <td><?php echo $row->cpu; ?></td>
                  <td><?php echo $row->gpu; ?></td>
                  <td><?php echo $row->categoria; ?></td>
                  <td><?php echo $row->precio; ?></td>
                  <td>
                    <?php
                    
                    echo form_open_multipart("Producto/modificar");
                    ?>
                    <input type="hidden" name="idproducto" value="<?php echo $row->id; ?>">
                    <button class="btn btn-outline-warning">Modificar</button>
                    <?php
                    echo form_close();
                    ?>
                  </td>
                  <td>
                    <?php
                    echo form_open_multipart("producto/eliminarproducto");
                    ?>
                    <input type="hidden" name="idproducto" value="<?php echo $row->id; ?>">
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