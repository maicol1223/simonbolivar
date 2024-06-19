<aside class="main-sidebar sidebar-dark-primary elevation-5">

   <!-- Brand Logo -->
   <a href="{{ route('home') }}" class="brand-link">
    <img src="{{asset('\img\logo.jpg')}}" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light px-4 text-bold" style="color: rgb(252, 252, 252);">DROGUERÍA</span>
</a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="{{ route('home') }}" class="nav-link active bg-danger">
                <i class="fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon fas fa-box-open"></i>
                <p>
                  Inventario
                </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('products.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-capsules"></i>
                    <p>Medicamentos</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('supplier.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-truck"></i>
                    <p>Proveedores</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('laboratory.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-flask"></i>
                    <p>Laboratorio</p>
                  </a>
                </li>
              </ul>
            </li>
            @role('Administrador')
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="fas fa-user"></i>
                <p>
                  Usuarios
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('role.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>Roles</p>
                  </a>
                </li>
              </ul>
<!--
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('permiso.index') }}" class="nav-link">
                    <i class="fas fa-lock"></i>
                    <p>Permisos</p>
                  </a>
                </li>
              </ul>
-->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('usuario.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
              </ul>
            </li>
            @endrole
            <li class="nav-item">
              <a href="#" class="nav-link bg-secondary">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  Ventas
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('clients.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Clientes</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('orders.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Facturas</p>
                  </a>
                </li>
              </ul>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
