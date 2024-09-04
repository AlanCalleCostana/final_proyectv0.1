<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="images\faces\face10.jpeg" alt="image">
                    <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                    <p class="name">
                        <?php echo $this->session->userdata('nombre'); ?>
                    </p>
                    <p class="designation">
                        <?php
                        if ($this->session->userdata('rol') == 3) {
                            echo 'Administrador';
                        } else {
                            echo 'Empleado';
                        }
                        //echo $this->session->userdata('tipo');
                        ?>
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/pageadmin/main">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Inicio</span>
                <span class="badge badge-success">Nuevo</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-bag menu-icon"></i>
                <span class="menu-title">Ventas</span>
                <span class="badge badge-danger">3</span>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/pageadmin/formventa">Realizar Venta</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false"
                aria-controls="form-elements2">
                <i class="icon-flag menu-icon"></i>
                <span class="menu-title">Formularios de Registro</span>
                <span class="badge badge-danger">3</span>
            </a>
            <div class="collapse" id="form-elements2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/pageadmin/formproduct">Productos</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/pageadmin/formemple">Empleados</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages\forms\validation.html">Administrador</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Tablas</span>
                <span class="badge badge-info">4</span>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/producto/listproducts">Productos</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/admins/listadmins">Administradores</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/empleados/listempleados">Empleados</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/empleados/listempleados">Ventas</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="<?php echo base_url(); ?>index.php/empleados/listeliminados">Eliminados</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-bubbles menu-icon"></i>
                <span class="menu-title">Paginas de Usuario</span>
                <span class="badge badge-danger">5</span>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/login/index">
                            Login
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/tienda/index"> Web Tienda </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages\apps\calendar.html">
                <i class="icon-calendar menu-icon"></i>
                <span class="menu-title">Calendario</span>
            </a>
        </li>
        <li class="mt-4 nav-item nav-progress">
            <h6 class="nav-progress-heading mt-4 font-weight-normal">
                Today's Sales
                <span class="nav-progress-sub-heading">
                    50 sold
                </span>
            </h6>
            <div class="progress progress-sm">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6 class="nav-progress-heading mt-4 font-weight-normal">
                Customer target
                <span class="nav-progress-sub-heading">
                    500
                </span>
            </h6>
            <div class="progress progress-sm">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </li>
    </ul>
</nav>