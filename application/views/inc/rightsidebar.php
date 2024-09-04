<div id="right-sidebar" class="settings-panel">
  <i class="settings-close mdi mdi-close"></i>
  <ul class="nav nav-tabs" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
        aria-controls="todo-section" aria-expanded="true">MENU</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
        aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
      aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
        <?php
        if ($this->session->userdata('rol') == 3) {
          $attributes = array('class' => 'form w-100');
          echo form_open_multipart("admins/modificaradmin", $attributes);
          ?>
          <div class="form-group d-flex">
            <input type="hidden" name="id" value=2>
            <button type="submit" class="add btn btn-primary">Mi cuenta</button>
          </div>
          <?php
          echo form_close();
        } else {
          $attributes = array('class' => 'form w-100');
          echo form_open_multipart("empleados/modificar", $attributes);
          ?>
          <div class="form-group d-flex">
            <input type="hidden" name="id" value=2>
            <button type="submit" class="add btn btn-primary">Mi cuenta</button>
          </div>
          <?php
          echo form_close();
        }
        ?>
        <form class="form w-100">
          <div class="form-group d-flex">
            <a href="<?php echo base_url(); ?>index.php/login/logout">
              <button type="button" class="add btn btn-primary">Cerrar Sesion</button>
            </a>
          </div>
        </form>
      </div>
      <div class="add-items d-flex px-3 mb-0">

        <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-4">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php
                echo form_open_multipart("Empleados/cambio");
                ?>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Usuario:</label>
                  <input type="text" class="form-control" id="recipient-name" name="usuario" Required>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Contraseña:</label>
                  <input type="password" class="form-control" id="recipient-name" name="password" required>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Cambiar</button>
                  <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                echo form_close();
                ?>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4"
          data-whatever="">Cambiar Usuario y contraseña</button>

      </div>



      
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
          All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="images\faces\face1.jpeg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images\faces\face2.jpeg" alt="image"><span class="offline"></span></div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images\faces\face3.jpeg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images\faces\face4.jpeg" alt="image"><span class="offline"></span></div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images\faces\face5.jpeg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="images\faces\face6.jpeg" alt="image"><span class="online"></span></div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    <!-- chat tab ends -->
  </div>
</div>